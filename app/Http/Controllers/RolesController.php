<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('role.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
            'name' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            $redirect = redirect('roles')->withErrors($validator)->withInput();
        }else{

            Role::create([
                'name' => $request->name,
                'description' => $request->description
            ]);

            $redirect = redirect('roles')->with('success', 'Role is successfully created');
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
        $role = Role::find($id);
        return $role;
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
            'name' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            $redirect = redirect('roles')->withErrors($validator)->withInput();
        }else{

            $role = Role::find($id);
            $role->name = $request->name;
            $role->description = $request->description;
            $role->save();

            $redirect = redirect('roles')->with('success', 'Role is successfully updated');
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
        Role::destroy($id);
        $redirect = redirect('roles')->with('success', 'Role has been deleted');

        return $redirect;

    }
}
