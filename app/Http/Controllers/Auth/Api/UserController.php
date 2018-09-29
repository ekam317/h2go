<?php

namespace App\Http\Controllers\Auth\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{

    /*
     * Create API Token
     * @param User
     * @return array
     */
    public function createToken($user) {
        $expire_date = \Carbon\Carbon::now()->addHour(1)->timestamp;

        return [
            'token' => $user->createToken( env('APP_KEY') )->accessToken,
            'expired_at' => $expire_date
        ];
    }

    protected function validateLogin(Request $request)
    {
        $validator = Validator::make( $request->all(), [
          'email' => 'required',
          'password' => 'required',
        ]);

        return $validator;
    }

	/**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $validate = $this->validateLogin($request);
        if ($validate->fails()) {
            return response()->json( [ 'error' => $validate->errors() ], 401 );
        }

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            $user = Auth::user();

            $response = $this->createToken( $user );
            $response['status'] = 'Success';

            return response()->json( $response );
        }

        return response()->json([
            'message'=> 'Invalid email or password!',
            'error'=> true
        ], 401);
    }

	/**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

		if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

		$input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        if($user->profile == null){
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->save();
        }
        activity($user->name)
            ->performedOn($user)
            ->causedBy($user)
            ->log('Registered');
        $user->assignRole('user');

        $response = $this->createToken( $user );
        $response['user'] = $user;
        $response['message'] = 'New account registered.';

        return response()->json( $response );
    }

    /**
     * Refresh Token
     *
     * @return \Illuminate\Http\Response
     */
    public function refresh(){
        $user = Auth::user();

        $response = $this->createToken( $user );
        $response['message'] = 'Token has been refreshed.';

        return response()->json( $response );
        return response()->json(['success' => $user], $this-> successStatus);
    }
}