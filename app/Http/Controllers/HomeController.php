<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function sendMessage(Request $request)
    {
        // return response()->json([
        //     'response' => $request->all(),
        // ]);
        $data = Validator::make($request->all(),[
            'name'      => 'required|min:5|max:50',
            'message'   => 'required|min:20|max:500',
        ]);

        if($data->fails()){
            return response()->json([
                'status' => 'errors',
                'errors' => $data->errors()
            ]);
        }

        return response()->json([
            'status'    => 'success',
            'message'   => 'message sent successfully',
        ]);
    }
}
