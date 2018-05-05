<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DataTables\UserDataTable;

class UsersController extends Controller
{
    /**
     * Show user creation form and list of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable) 
    {
        return $dataTable->render('users.index');
    }

    /**
     * Store new user in the system.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string|min:6|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required',
            'contact' => 'required',
            'role_id' => 'required|exists:roles,id',
            'department_id' => 'nullable|exists:departments,id'
        ]);

        User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'address' => request('address'),
            'contact' => request('contact'),
            'role_id' => request('role_id'),
            'department_id' => request('department_id')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $this->validate($request, [
            'name_edit' => 'required|string',
            'address_edit' => 'required',
            'contact_edit' => 'required',
            'role_id_edit' => 'required|exists:roles,id',
            'department_id_edit' => 'nullable|exists:departments,id'
        ]);

        $user->update([
            'name' => request('name_edit'),
            'address' => request('address_edit'),
            'contact' => request('contact_edit'),
            'role_id' => request('role_id_edit'),
            'department_id' => request('department_id_edit')
        ]);
    }
}
