<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Customer;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
    	$customers = Customer::all();
        return view('customer.index', compact('customers'));
    }
    public function create()
    {
    	return view('customer.create');
    }
    public function show($id){
        $customers = Customer::find($id);

        return view('customer.show', compact('customers'));
    }
    public function store(Request $request)
    {
        Customer::create([
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
        ]);
        // Session::flash('success_customer_added', 'Customer successfully added!');
        // return redirect('/crud')->back();
       return redirect('/customer')->with('success_customer_added','Successfully insert Customer data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $customer = Customer::findOrFail($id);
        
        $input = $request->all();

        $customer->update($input);

        Session::flash('success_customer_update', 'Customer successfully updated!');

        return redirect()->route('customer.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash('customer_deleted', 'Customer Successfully deleted!');
        return redirect()->route('customer.index');
    }
    

}
