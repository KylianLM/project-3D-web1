<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;


class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload()
    {
        if (Input::hasFile('image')) {
            $file = Input::file('image');

//            $filename = $file->getClientOriginalName();
            $extension = Input::file('image')->getClientOriginalExtension(); // Récupère l'extension du fichier
            $filename = rand(11111, 99999) . '.' . $extension; // Attribue un nom aléatoire au fichier
            Image::make($file->getRealPath())->resize(256, 256)->save('uploads/'.$filename);

            $id = Auth::user()->id;
            DB::table('users')
                ->where('id', $id)
                ->update(['img' => $filename]);
            return Redirect::to('profil');
        }
//        74381.png
    }
}