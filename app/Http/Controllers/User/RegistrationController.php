<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Register | Meta Animals'
        ];
        return view('registration',$data);
    }
}
