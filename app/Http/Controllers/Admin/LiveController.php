<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegistrationModel;
use App\Models\Attendees;
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

        $is_walk_in_text = $request->input('attendee_is_walk_in');
        $is_walk_in = 0;
        if ($is_walk_in_text == 'true') {
            $is_walk_in = 1;
        }

        // Create new registered client
        $create = Attendees::create([
            'uuid' => Str::uuid(),
            'name' => $request->input('attendee_name'),
            'iagd_number' => $request->input('attendee_iagd_number'),
            'walk_in' => $is_walk_in,
            'created_by' => 'TBD',
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
