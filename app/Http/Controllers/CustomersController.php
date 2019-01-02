<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Customer;
use App\Model\Company;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with('company')->paginate(5);
        $companies = Company::all();
        return view('customer.index')
        ->with('customers', $customers)
        ->with('companies', $companies);
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
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:customers',
            'phone' => 'required|string',
            'address' => 'required|string',
            'company' => 'required|integer',

        ]);

        if($validator->fails()){
            $redirect = redirect('customers')->withErrors($validator)->withInput();
        }else{

            $customer = Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'company_id' => $request->company
            ]);

            $redirect = redirect('customers')->with('Success', 'Customer '. $request->name.' is successfully created');
        }

        return $redirect;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:customers,email,'.$id,
            'phone' => 'required|string',
            'address' => 'required|string',
            'company' => 'required|integer',
        ]);

        if($validator->fails()){
            $redirect = redirect('customers')->withErrors($validator)->withInput();
        }else{

            $customer = customer::find($id);
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->company_id = $request->company;
            $customer->save();

            $redirect = redirect('customers')->with('success', 'Customer is successfully updated');
        }

        return $redirect;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        $redirect = redirect('customers')->with('success', 'Customer has been deleted');

        return $redirect;
    }
}
