<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class ApiController extends Controller
{
    /**
     * API Get infos from User
     * @return mixed
     */
    public function me()
    {
        if (Auth::check())
        {
            $name = Auth::user();
            return response()->json(['me' => $name]);
        } else {
            return response()->json(['me' => 'PAF']);
        }
    }

    /**
     * API set Scrore
     * @return Response
     */
    public function setScore()
    {
        if (Auth::check())
        {

        } else {
            return response('Unauthorized','401');
        }
    }

    public function img()
    {

    }
}
