<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * sho top page
     * 
     * @return \Illuminate\View\View
     */
     public function index()
     {
         return view('index');
     }
     
     
     public function input(Request $request)
     {  
        //
        $email = $request->input('email');
        $pass = $request->input('password');
        var_dump($email, $pass); exit;
         
        //return view('test.input');
     }
}
