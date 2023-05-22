<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageRequest(Request $request)
    {
        echo $page = $request->query('page', null);
    }
}
