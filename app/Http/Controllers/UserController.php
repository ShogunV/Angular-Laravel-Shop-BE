<?php

namespace App\Http\Controllers;

use App\User;
use JWTAuth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();
        $token = JWTAuth::fromUser($user);
        return response()->json([
            'message' => 'User created',
            'token' => $token,
            'username' => $user->name,
            'email' => $user->email
        ], 201);
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'Could not create token'], 500);
        }

        $user = User::where('email', $request->input('email'))->first();

        $username = $user->name;
        $email = $user->email;

        if($user->isAdmin()) {return response()->json(['token' => $token, 'admin' => true, 'username' => $username, 'email' => $email]);}

        // all good so return the token
        return response()->json(compact('token', 'username', 'email'));
    }
}
