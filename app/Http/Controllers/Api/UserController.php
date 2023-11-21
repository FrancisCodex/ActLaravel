<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index(){

        return User::all();
    }
    public function show(string $id){

        $user = User::find($id);

        return $user;
    }
    public function delete(string $id){

        $user = User::find($id);
        $user->delete();
    }
    public function store(UserRequest $request){

        $validated = $request->validated();

        $validated['password'] = Hash::make($validated[
            'password'
        ]);

        $userreq = User::create($validated);
        return $userreq;
    }


}
