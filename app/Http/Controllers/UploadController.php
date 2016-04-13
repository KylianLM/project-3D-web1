<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Redirect;


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
            $file->move('uploads', $filename);
            $id = Auth::user()->id;
            DB::table('users')
                ->where('id', $id)
                ->update(['img' => $filename]);

            echo '<img src="uploads/' . $filename . '" />';
            return Redirect::to('upload');
        }
//        74381.png
    }
}
//        print_r($file);
//        $rules = array('image' => 'required',);
//        print_r($rules);
//        $validator = Validator::make($file, $rules);
//        if ($validator->fails()) {
//            echo 'aaa';
//        }
//        else {
//                if (Input::file('image')->isValid()) {
//                    $destinationPath = 'uploads';
//                    Input::file('image')->move($destinationPath, $fileName);
//                }
//            }
//        }
