<?php

namespace App\Http\Controllers\v1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Order::class);

        if (auth()->user()->can('viewAny-order', order::class)){

            $data = [];

            $customers = auth()->user()->customers;

            foreach ($customers as $customer){

                foreach ($customer->orders as $order){
                    $data[$order->id]['order'] = $order->only('id', 'reference', 'amountET', 'amountVAT');

                    foreach ($order->orderLines as $orderLine){
                        $products[] = [
                                      'product_id' => $orderLine->product->id,
                                      'ref' => $orderLine->product->reference,
                                      'name' => $orderLine->product->name,
                                      'unitPrice' => $orderLine->unitPrice,
                                      'amountVat' => $orderLine->amountVat
                        ];
                    }
                    $data[$order->id]['products'] = $products;
                    $products = [];
                }
            }
            return response()->json( $data);
        } else {
            return response('Unauthorized.', 401);
        }
    }

    public function addProduct( Order $order, \App\Models\Product $product, $quantity){

//        dd($order);
        $this->authorize('addProduct', $order);

        $amountVat = ( $product->sellingPrice * $product->vat->rate ) / 100 ;
        \App\Models\OrderLines::create(['unitPrice' => $product->sellingPrice,
                                        'amountVat' => $amountVat,
                                        'quantity' => $quantity,
                                        'order_id' => $order->id,
                                        'product_id' => $product->id,
        ]);
        return response()->json('Prodct added successfully.', 200);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->can('viewAny-order', order::class)){
            Order::create($request->all());
            $r['order'] = $request->all();
            $r['state'] = 'order created with success';
            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $this->authorize('view-order', $order);

        if (auth()->user()->can('viewAny-order', order::class)){
            return $order;
        }else {
            return response('Unauthorized.', 401);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $this->authorize('update', $order);

        if (auth()->user()->can('viewAny-order', order::class)){
            $r['oldOrder'] = Order::find($order->id);
            $order->update($request->all());
            $r['updatedOrder'] = $order;
            $r['state'] = 'order updated with success';
            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $this->authorize('delete', $order);

        if (auth()->user()->can('viewAny-order', order::class)){
            $order->delete();
            return response('order deleted with success', 200);
        }else {
            return response('Unauthorized.', 401);
        }
    }
}
