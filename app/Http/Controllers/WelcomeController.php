<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * sho top page
     * 
     * @return \Illuminate\View\View
     */
     public function index()
     {
         return view('welcome');
     }
    
    /**
     * 2ndpage show
     * 
     * @return \Illuminate\View\View
     */
     public function second()
    {
        return view('welcome_second');
    }
}