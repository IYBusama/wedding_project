<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function showUserList()
    {
        $users = User::all();
        return view('admin.user_list', compact('users'));
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
    public function showEditUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user'));
    }
    public function editUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('AdminUser.showEditUser',$id);
    }
    public function userDelete($id) {
        $user = User::find($id);
        $user->delete();

        return redirect() -> route('AdminUser.showUserList');
    }
}
