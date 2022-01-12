<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');
        $address = $request->get('address');
        $existing_customer = Customer::where('email', '=', $email)->count();
        if ($existing_customer == 0) {
            $customer = new Customer([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'address' => $address
            ]);
            $customer->save();
            return $customer;
        }
        
        return response()->json(["message", "Email already associated with existing user"], 401);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        if ($request->get('first_name')) {
            $customer->first_name = $request->get('first_name');
        }
        if ($request->get('last_name')) {
            $customer->last_name = $request->get('last_name');
        }
        if ($request->get('email')) {
            $existing_customer = Customer::where('email', '=', $request->get('email'))->count();
            if ($existing_customer == 0) {
                $customer->email = $request->get('email');
            }
        }

        if ($request->get('address')) {
            $customer->address = $request->get('address');
        }
        $customer->save();
        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        return $customer->delete();
    }
}
