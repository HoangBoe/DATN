<?php
//
//namespace App\Http\Controllers;
//
//use JWTAuth;
//use App\Customer;
//use Illuminate\Http\Request;
//use Lanin\Laravel\ApiDebugger\Debugger;
//use Symfony\Component\Debug\Debug;
//use Tymon\JWTAuth\Exceptions\JWTException;
//
//
//class APIController extends Controller
//{
//    /**
//     * @var bool
//     */
//    public $loginAfterSignUp = true;
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function login(Request $request)
//    {
//        $input = $request->only('username', 'password');
//        $token = null;
//
//        if (!$token = JWTAuth::attempt($input)) {
//            \Debugger::dump(JWTAuth::attempt($input));
//            return response()->json([
//                'status' => false,
//                'message' => 'Invalid Email or Password',
//            ], 401);
//        }
//
//        return response()->json([
//            'status' => true,
//            'token' => $token,
//        ]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Http\JsonResponse
//     * @throws \Illuminate\Validation\ValidationException
//     */
//    public function logout(Request $request)
//    {
//        $this->validate($request, [
//            'token' => 'required'
//        ]);
//
//        try {
//            JWTAuth::invalidate($request->token);
//         //   $request->user()->token()->revoke();
//            return response()->json([
//                'status' => true,
//                'message' => 'User logged out successfully'
//            ]);
//        } catch (JWTException $exception) {
//            \Debugger::dump($exception, "asdakjsdh");
//            return response()->json([
//                'status' => false,
//                'message' => 'Sorry, the user cannot be logged out'
//            ], 500);
//        }
//    }
//
//
//}


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['username', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
