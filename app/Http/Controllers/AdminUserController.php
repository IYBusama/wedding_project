<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function showUserList()
    {
        return view('admin.user_list');
    }

    public function showAddUser()
    {
        return view('admin.add_user');
    }
    public function AddUser(Request $request)
    {
        $request->validate([
            'UserName' => 'required|string|max:255',
            'UserEmail' => 'required',
            'UserPassword' => 'required|min:6',
        ]);
    }
    public function showEditUser()
    {
        return view('admin.edit_user');
    }
    public function editUser(Request $request)
    {
        $request->validate([
            'UserName' => 'required|string|max:255',
            'UserEmail' => 'required',
            'UserPassword' => 'required|min:6',
        ]);
    }
    public function userDelete(Request $request, $id) {}
}
