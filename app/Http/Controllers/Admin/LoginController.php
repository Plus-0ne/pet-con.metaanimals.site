<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;

class LoginController extends Controller
{
    /**
     * Login page view
     * @return Illuminate\Contracts\View\View
     */
    public function index() {

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'urlAsset' => asset('')
        ]);

        $data = [
            'title' => 'Pet Fair 2024 - Manalo K9 | Administrator'
        ];

        return view('admins.login',$data);
    }

    /**
     * Validate admin credentials
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function adminValidation(Request $request) {

        // Check if not ajax request
        if (!$request->ajax()) {
            $data = [
                'status' => 'error',
                'message' => 'Something\'s wrong! Please try again.'
            ];

            return response()->json($data);
        }

        // Validate request
        $validate = Validator::make($request->all(),[
            'email_address' => 'required',
            'password' => 'required'
        ]);

        // Validation fails response
        if ($validate->fails()) {
            $data = [
                'status' => 'warning',
                'message' => $validate->errors()->first()
            ];

            return response()->json($data);
        }
        $cred = [
            'email_address' => $request->input('email_address'),
            'password' => $request->input('password')
        ];

        if (!Auth::guard('admins')->attempt($cred)) {
            $data = [
                'status' => 'warning',
                'message' => 'Admin not found!'
            ];

            return response()->json($data);
        }

        $data = [
            'status' => 'success',
            'message' => 'Welcome! '.Auth::guard('admins')->user()->first_name
        ];

        return response()->json($data);
    }
}
