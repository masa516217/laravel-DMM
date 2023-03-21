<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterPostRequest;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /**
     * 
     * 表示用
     */
    public function index()
    {
        return view('user.register');
    }
    
    /**
     * 
     * 登録用
     */
    public function register(UserRegisterPostRequest $request)
    {
        $datum = $request->validated();
        $datum['password'] = Hash::make($datum['password']);
        
        //テーブルへのINSERT
        try {
            $r = UserModel::create($datum);
        } catch(\Throwable $e) {
           //echo $e->getMessage();
            //exit;
        }
       //ユーザ登録完了
       $request->session()->flash('front.user_register_success', true);
       
       return redirect('/');
    
    }
}
