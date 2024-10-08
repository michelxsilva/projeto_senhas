<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users);
    }
    public function create(){
        return view('users.create');
    }
    
    public function store(UserRequest $request){
        $params = $request->all();
        $user = User::create($params);
        session()->flash('success', 'User created');
        return response()->json($user);
    }

    public function update(UserRequest $request, User $user){
        $params = $request-> all();
        $user->update($params);
        session()->flash('success', 'User updated');
        return response()->json($user);
    }

    public function destroy(User $user){
        $user->delete();
        session()->flash('success', 'User deleted');
        return response()->json(['message'=>'Usuário excluído com sucesso'], 204);
    }
}
