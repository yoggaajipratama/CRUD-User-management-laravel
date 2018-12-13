<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->get('name');
        $employee->jk = $request->get('jk');
        $employee->email = $request->get('email');
        $employee->hak = $request->get('hak');
        $employee->password = md5($request->get('password'));
        $employee->save();

        return redirect('employees')->with('success','Data telah berhasil ditambahkan');
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
        $employee = Employee::find($id);
        return view('edit',compact('employee','id'));
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
        $employee= Employee::find($id);
        $employee->name=$request->get('name');
        $employee->jk=$request->get('jk');
        $employee->pekerjaan=$request->get('email');
        $employee->pekerjaan=$request->get('hak');
        /*$employee->password=$request->get('password');*/
        $employee->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $employee = Employee::find($id);
         $employee->delete();
         return redirect('employees')->with('success','Data telah terhapus');
    }
}
