<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index(){
        return response()->json([
            'status' => 'success',
            'message' => 'Session Expire! Please Login Again'
        ], 200);

    }
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|confirmed',
            ]);

            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            $user->save();

            // Transform $user into a resource
            $userResource = new UserResource($user);

            // Return user data along with success message
            return response()->json([
                'message' => 'User registered successfully',
                'user' => $userResource,
            ], 201);
        } catch (ValidationException $e) {
            // Validation failed, return validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return response()->json(['message' => 'Failed to register user'], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }

            $user = $request->user();

            $token = $user->createToken('OPF Password Grant Client')->accessToken;

            // Return user data along with token
            return response()->json(['token' => $token, 'user' => $user], 200);
        } catch (ValidationException $e) {
            // Validation failed, return validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return response()->json(['message' => 'Failed to authenticate :' . $e->getMessage()], 500);
        }
    }

    public function forgotPassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $status = $this->sendResetLinkEmail($request->email);

            if ($status === Password::RESET_LINK_SENT) {
                return response()->json(['message' => 'Reset link sent to your email', 'token' => $this->getToken($request->email)], 200);
            } else {
                return response()->json(['message' => 'Unable to send reset link'], 400);
            }
        } catch (ValidationException $e) {
            // Validation failed, return validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return response()->json(['message' => 'Failed to send reset link: ' . $e->getMessage()], 500);
        }
    }

    protected function sendResetLinkEmail($email)
    {
        return Password::sendResetLink(['email' => $email]);
    }

    protected function getToken($email)
    {
        // Retrieve the token from the password_resets table
        $token = DB::table('password_reset_tokens')->where('email', $email)->first();

        // Return the token if found
        return $token ? $token->token : null;
    }


    public function resetPassword(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'token' => 'required|string',
                'password' => 'required|string|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $updatePassword = DB::table('password_reset_tokens')
                ->where([
                    'email' => $request->email,
                    'token' => $request->token
                ])
                ->first();

            if (!$updatePassword) {
                return response()->json(['message' => 'Invalid token'], 400);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }

            $user->password = Hash::make($request->password);
            $user->save();

            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            return response()->json(['message' => 'Password reset successfully'], 200);
        } catch (ValidationException $e) {
            // Validation failed, return validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return response()->json(['message' => 'Failed to reset password: ' . $e->getMessage()], 500);
        }
    }

    public function getUserData()
    {
        $userResource = new UserResource(Auth::user());
        return response()->json(['data' => $userResource], 200);

    }

    public function logout()
    {
        $token = Auth::user()->token();
        $token->revoke();
        return response()->json(['message' => 'You have been successfully logged out!'], 200);
    }

}
