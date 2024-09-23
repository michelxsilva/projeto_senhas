<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    
    public function store(Request $request){
        $params = $request->all();
        $user = User::create($params);
        return $user;
    }

    public function update(Request $request, User $user){
        $params = $request-> all();
        $user->update($params);
        return $user;
    }

    public function destroy(User $user){
        $user->delete();
        return response()->json(['message'=>'Usuário excluído com sucesso'], 204);
    }
}
