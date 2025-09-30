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
            foreach (auth()->user()->customers as $customer){ $r[] = $customer->orders; };
            return response()->json(['orders of customers of user' => $r]);
        }else {
            return response('Unauthorized.', 401);
        }
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
