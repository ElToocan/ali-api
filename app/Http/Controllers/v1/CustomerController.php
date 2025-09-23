<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController
{
    public function index()
    {
        return Customer::all();
    }

    public function show(Customer $customer)
    {
        return $customer;
    }

    public function store(Request $request)
    {


        Customer::create($request->all());

        $customer = Customer::where('email', '=',$request['email'])->first();

        if($customer){
            $r['customer'] = $customer;

            $r['state'] = 'customer created with success';
        } else {
            $r['state'] = 'Error customer not created';
        }



        return $r;
    }

    public function update(Customer $customer, Request $request)
    {
//        dd($customer);
        $r['oldCustomer'] = Customer::find($customer->id);
        $customer->update($request->all());
        $r['updatedCustomer'] = $customer;
        $r['state'] = 'customer updated with success';
        return $r;
    }



}
