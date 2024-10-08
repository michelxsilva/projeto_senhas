<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    
    public function store(UsersRequest $request){
        $params = $request->all();
        $user = User::create($params);
        $request = session()->flash('success', 'User created');
        return response()->json($user);
    }

    public function update(UsersRequest $request, User $user){
        $params = $request-> all();
        $user->update($params);
        $request = session()->flash('success', 'User updated');
        return $user;
    }

    public function destroy(User $user){
        $user->delete();
        session()->flash('success', 'User deleted');
        return response()->json(['message'=>'Usuário excluído com sucesso'], 204);
    }
}
