<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterPost;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function register(UserRegisterPost $request)
    {
        $validatedData = $request->validated();
        
        try {
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::create($validatedData);
        } catch(\Throwable $e) {
            echo $e->getMessage();
            exit;
        }

        return redirect('/')->with('message', '登録が完了しました');
    }
}
