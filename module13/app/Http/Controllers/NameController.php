<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function name_request(Request $request)
    {
        $name=$request->input('name');
        echo $userAgent = request()->header('User-Agent');
        
    }
}
