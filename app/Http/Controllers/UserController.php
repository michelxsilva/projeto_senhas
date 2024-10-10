<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request){
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show($id){
        $user = User::find($id);
        if($user){
            return response()->json($user);
        }
        return response()->json(['message' => 'User not found'], 404);
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return response()->json(['message' => 'User deleted successfully'], 204);
        }
        return response()->json(['message' => 'User not found'], 404);
    }
}
