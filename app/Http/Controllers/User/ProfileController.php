<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Pet fashion registration | Pet Fair 2024 - Manalo K9'
        ];
        return view('profile',$data);
    }
}
