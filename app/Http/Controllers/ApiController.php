<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class ApiController extends Controller
{
    public function myName()
    {
        if (Auth::check())
        {
            $name = Auth::user()->name;
            return response()->json(['name' => $name]);
        }
    }
}
