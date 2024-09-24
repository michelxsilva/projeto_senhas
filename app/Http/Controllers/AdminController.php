<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;

class AdminController extends Controller
{
    public function index(){
        $admins = AdminUser::all();
        return view('admin.index', compact('admins'));
    }
    
    public function show(){
        return view('admin.show');
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $params = $request->all();
        $admin = AdminUser::create($params);
        return  $admin;
    }
    public function update(Request $request, AdminUser  $admin){
        $params = $request-> all();
        $admin->update($params);
        return $admin;
    }
    public function destroy(AdminUser  $admin){
        $admin->delete();
        return response()->json(['message'=>'Usuário excluído com sucesso'], 204);
}
}