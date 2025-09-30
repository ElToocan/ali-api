<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Policies\CustomerPolicy;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        if (auth()->user()->can('viewAny-customer', Customer::class)){
            return auth()->user()->customers;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    public function show(Customer $customer)
    {
        $this->authorize('view', $customer);

        if (auth()->user()->can('read-customer', Customer::class)){
            return $customer;
        }else {
            return response('Unauthorized.', 401);
        }
    }

    public function store(Request $request)
    {
        if (auth()->user()->can('viewAny-customer', Customer::class)){
            Customer::create($request->all());

            $customer = Customer::where('email', '=',$request['email'])->first();

            if($customer){
                $r['customer'] = $customer;

                $r['state'] = 'customer created with success';
            } else {
                $r['state'] = 'Error customer not created';
            }

            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    public function update(Customer $customer, Request $request)
    {
        $this->authorize('update', $customer);

        if (auth()->user()->can('viewAny-customer', Customer::class)){
            $this->authorize('update', $customer);

            $r['oldCustomer'] = Customer::find($customer->id);
            $customer->update($request->all());
            $r['updatedCustomer'] = $customer;
            $r['state'] = 'customer updated with success';
            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }



}
