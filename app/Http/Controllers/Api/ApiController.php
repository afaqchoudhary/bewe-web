<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utils\StatusController;
use App\Models\Country;
use App\User;
use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{

    /**
     * createUser
     * @param Request $request
     * @return JsonResponse
     */
    public function createUser(Request $request)
    {
        /**
         * validate data when recieve from request
         */
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'country_id' => 'required',
            'signup_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], StatusController::$PRECONDITION_FAILED);
        }
        try {
            if (isset($request->gmail_id)) {
                $is_exist = User::where('gmail_id', $request->gmail_id)
                    ->first();
            } else {
                $is_exist = User::where('facebook_id', $request->facebook_id)
                    ->first();
            }
            if (!$is_exist) {
                $user = User::create($request->all());
            } else {
                $user = $is_exist;
            }
            $tokenResult = $user->createToken('bewe-access-token');
            $token = $tokenResult->token;
            $token->save();
            return response(['user' => $user, 'access_token' => $tokenResult->accessToken], StatusController::$CREATED_STATUS);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getPrevious()], StatusController::$INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * getAllCountries
     * @return JsonResponse
     */
    public function getAllCountries()
    {
        $countries = Country::all();
        return response(['countries' => $countries], StatusController::$SUCCESS_STATUS);
    }

    /**
     * updateProfile
     * @param Request $request
     * @return JsonResponse
     */
    public function updateProfile(Request $request)
    {
        /**
         * validate data when recieve from request
         */
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'country_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], StatusController::$PRECONDITION_FAILED);
        }
        try {
            $user = $request->user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact_no = $request->contact_no;
            $user->country_id = $request->country_id;
            if ($user->save()) {
                return response(['user' => $user], StatusController::$SUCCESS_STATUS);
            } else {
                return response(['message' => "profile not updated"], StatusController::$NOT_MODIFIED);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e->getPrevious()], StatusController::$INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
