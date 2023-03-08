<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TestController extends Controller
{
    /**
     * sho top page
     * 
     * @return \Illuminate\View\View
     */
     public function index()
     {
         return view('test.index');
     }
     
    public function input(TestPostRequest $request)
    {
        //validate zumi
        
        //de-tanosyuutoku
        $validatedData = $request->validated();
        //
        //var_dump($validatedData); exit;
        
        return view('test.input', ['datum' => $validatedData]);
    }
}