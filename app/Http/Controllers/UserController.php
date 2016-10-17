<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('user')->get();

        return view ('user.index', compact('user'));
    }

    public function button()
    {
    
        
    }
}
