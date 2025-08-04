<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('AdminUser.showAddUser');
    }
    public function showEditUser()
    {
        return view('admin.edit_user');
    }
    public function editUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
    }
    public function userDelete(Request $request, $id) {}
}
