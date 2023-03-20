<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterPostRequest;

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
    public function register(UserRegisterPost $request)
    {
        $datum = $request->validated();
        $datum['password'] = Hash::make($datum['password']);
        
       
        
        //try {
          //  $r = TaskModel::create($datum);
        //};
       
    }
    
}
