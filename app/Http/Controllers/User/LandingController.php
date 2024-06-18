<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pet Fair 2024 - Manalo K9'
        ];
        return view('landing',$data);
    }
}
