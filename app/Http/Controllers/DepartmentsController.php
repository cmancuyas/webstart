<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Department;
use Illuminate\Support\Facades\Validator;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(5);
        return view('department.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:6|max:50'
        ]);

        // $validator = $request->validate([
        //     'name' => 'required|min:3|max:50',
        //     'description' => 'required|min:6|max:50'
        // ]);

        if($validator->fails()){
            $redirect = redirect('department/create')->withErrors($validator)->withInput();
        }else{
            Department::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            $redirect = redirect('department')->with('success', 'Successfully Added '.$request->name);
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
        $department = Department::find($id);
        return view('department.edit')->with('department', $department);
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
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:6|max:50'
        ]);

        if($validator->fails()){
            $redirect = redirect('/department'. $id. '/edit')->withErrors($validator)->withInput();
        }else{
            $department = Department::find($id);
            $department->name = $request->name;
            $department->description = $request->description;

            $department->save();

            $redirect = redirect('department')->with('success', 'Department '.$request->name.' has been updated');
        }

        return $redirect;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $department = Department::find($request->department_id);

        $department->delete();

        $redirect = redirect('department')->with('success', 'Department '.$department->name.' has been deleted');

        return $redirect;
    }

    public function deleteAll(){

        Department::query()->delete();

        $redirect = redirect('department')->with('success', 'All Departments have been deleted!');

        return $redirect;
    }
}
