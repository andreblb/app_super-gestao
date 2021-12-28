<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){

        return view('site.principal');

    }
}