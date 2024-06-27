<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegistrationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;
use Illuminate\Support\Facades\Storage;

class LiveController extends Controller
{
    /**
     * Registration form page
     * @return Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'title' => 'Fairs Dashboard'
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'urlAsset' => asset('')
        ]);
        return view('admins/dashboard',$data);
    }

    /**
     * Register new client
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function attendee_register(Request $request)
    {
        // Check if request is ajax
        if (!$request->ajax()) {
            $data = [
                'status' => 'error',
                'message' => 'Something\'s wrong! Please try again.'
            ];

            return response()->json($data);
        }

        // Create new registered client
        $create = RegistrationModel::create([
            'uuid' => Str::uuid(),
            'token_access' => $token_access,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'job_title' => $request->input('job_title'),
            'email_address' => $request->input('email_address'),
            'contact_number' => $request->input('contact_number'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Save created registration
        if (!$create->save()) {
            $data = [
                'status' => 'error',
                'message' => 'Failed to create record!'
            ];

            return response()->json($data);
        }

        $data = [
            'status' => 'success',
            'message' => 'Registered successfully!'
        ];

        return response()->json($data);
    }

    public static function quickRandom($length)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
