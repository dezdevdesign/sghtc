<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\DataTables\DepartmentDataTable;

class DepartmentsController extends Controller
{
    /**
     * Show department creation form and list of departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DepartmentDataTable $dataTable) 
    {
        return $dataTable->render('departments.index');
    }

    /**
     * Store new department in the system.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        Department::create([
            'name' => request('name'),
            'description' => request('description')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $department->update([
            'name' => request('name'),
            'description' => request('description')
        ]);
    }
}
