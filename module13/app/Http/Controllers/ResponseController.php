<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    function response(){
        $my_response=array(
            'message'   => 'Success',
            'data'      => array(
                'name'  =>'John Doe',
                'age'   =>25
            )
        );
        return $my_response;
    }
    function remember(Request $request)
    {
        $rememberToken = request()->cookie('remember_token');

        if ($rememberToken === null) {
            // If the cookie is not present, set $rememberToken to null.
            $rememberToken = null;
        }
    }
    function email_handle(Request $request)
    {
        $email=$request->input('email');
        return array(
            'success'=>true,
            'message'=>'Form submitted successfully.'
        );
    }
}
