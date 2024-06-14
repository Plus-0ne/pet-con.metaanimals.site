<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\RegistrationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;

class RegistrationController extends Controller
{
    /**
     * Registration form page
     * @return Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'title' => 'Register | Meta Animals'
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'urlAsset' => asset('')
        ]);
        return view('registration',$data);
    }

    /**
     * Register new client
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function registerNew(Request $request)
    {
        // Check if request is ajax
        if (!$request->ajax()) {
            $data = [
                'status' => 'error',
                'message' => 'Something\'s wrong! Please try again.'
            ];

            return response()->json($data);
        }

        // Create validation rules
        $validate = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'job_title' => 'required',
            'email_address' => 'required',
            'contact_number' => 'required',
            'password' => 'required',
            'verify_password' => 'required',
        ],[
            'first_name.required' => 'Please enter your first name!',
            'last_name.required' => 'Please enter your last name!',
            'middle_name.required' => 'Please enter your middle name!',
            'job_title.required' => 'Please enter your job title!',
            'email_address.required' => 'Please enter your email address!',
            'contact_number.required' => 'Please enter your contact number!',
            'password.required' => 'Please enter your password!',
            'verify_password.required' => 'Please verify your password!',
        ]);

        // Return response json if validation fails
        if ($validate->fails()) {
            $data = [
                'status' => 'warning',
                'message' => $validate->errors()->first()
            ];

            return response()->json($data);
        }

        // Check if email address exist
        $registered = RegistrationModel::where('email_address',$request->input('email_address'));

        if ($registered->count() > 0) {
            $data = [
                'status' => 'warning',
                'message' => 'This email address is already registered!'
            ];

            return response()->json($data);
        }

        // Check if password is verified correctly
        if ($request->input('password') != $request->input('verify_password')) {
            $data = [
                'status' => 'warning',
                'message' => 'Password did not matched!'
            ];

            return response()->json($data);
        }

        // Create uuid
        do {
            $uuid = Str::uuid();
        } while (RegistrationModel::where('uuid', '=', $uuid)->first()  instanceof RegistrationModel);

        // Create token access
        do {
            $token_access = $this->quickRandom(32);
        } while (RegistrationModel::where('token_access', '=', $token_access)->first()  instanceof RegistrationModel);

        // Create new registered client
        $create = RegistrationModel::create([
            'uuid' => $uuid,
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
