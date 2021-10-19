<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    public function index()
    {
        $users =User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
         $request->validate([
              'name' => 'required|min:3|max:10',
              'email' => 'required|email|unique:users',
              'password' => 'required'
          ]);
        User::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);

        // $roles = $request->input('roles', []);
        // $user->syncRoles($roles);
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function show($id)
     {

        $user = User::findOrFail($id);
        //   dd($user);
         return view('users.show', compact('user'));
    }


    public function edit(User $user)
     {
         return view('users.edit', compact('user'));
     }

     public function update(UserEditRequest $request, User $user)
    {
        // $user=User::findOrFail($id);
        $data = $request->only('name', 'email');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        // if(trim($request->password)=='')
        // {
        //     $data=$request->except('password');
        // }
        // else{
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('succes', 'Usuario eliminado correctamente');
    }
}
