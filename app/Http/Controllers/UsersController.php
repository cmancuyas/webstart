<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Model\Department;
use App\Model\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        // $users->password = Hash::make(Input::get('password'));
        $allRoles = Role::all();
        $allDepts = Department::all();
        return view('user.index')->with('users', $users)->with('allRoles', $allRoles)->with('allDepts', $allDepts);
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
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required',
            'department' => 'required'

        ]);

        if($validator->fails()){
            $redirect = redirect('users')->withErrors($validator)->withInput();
        }else{

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make(Input::get('password')),

            ]);

            $user->roles()->attach([$user->id => ['role_id' => $request->role]]);
            $user->departments()->attach([$user->id => ['department_id' => $request->department]]);

            $redirect = redirect('users')->with('Success', 'User is successfully created');
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


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$id,
            'password' => 'sometimes|min:6',
            'role' => 'required',
            'department' => 'required'
        ]);

        if($validator->fails()){
            $redirect = redirect('users')->withErrors($validator)->withInput();
        }else{

            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make(Input::get('password'));

            $user->roles()->sync([$id => ['role_id' => $request->role]]);
            $user->departments()->sync([$id => ['department_id' => $request->department]]);
            $user->save();
            $redirect = redirect('users')->with('Success', 'User is successfully updated');
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
        User::destroy($id);
        $redirect = redirect('users')->with('success', 'User has been deleted');

        return $redirect;
    }
}
