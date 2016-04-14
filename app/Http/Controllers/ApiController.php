<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            return response()->json(['me' => '{"me":{"id":1,"name":"PAF","email":"kylian.le.mette@gmail.com","score":600,"created_at":"2016-04-13 16:26:18","updated_at":"2016-04-14 10:10:50"}}']);
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
            $id = Auth::user()->id;
            $score =  Input::get('score');
            DB::table('users')
                ->where('id', $id)
                ->update(['score' => $score]);
        } else {
            return response('Unauthorized','401');
        }
    }

}
