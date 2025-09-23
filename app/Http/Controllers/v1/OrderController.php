<?php

namespace App\Http\Controllers\v1;


use Illuminate\Http\Request;
use App\Models\Order;

class OrderController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        $r['order'] = $request->all();
        $r['state'] = 'order created with success';
        return $r;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $r['oldOrder'] = Order::find($order->id);
        $order->update($request->all());
        $r['updatedOrder'] = $order;
        $r['state'] = 'order updated with success';
        return $r;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
