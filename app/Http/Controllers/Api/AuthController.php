<?php

namespace App\Http\Controllers\Api;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAuthRequest;
use App\User;

class AuthController extends Controller
{
    use Helpers;
    public $loginAfterSignUp = true;

    public function register(RegisterAuthRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'result' => $user
        ], 200);
    }

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;

        if (!$jwt_token = app('tymon.jwt.auth')->attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => '邮箱或者密码错误',
            ], 401);
        }

        return $this->respondWithToken($jwt_token);
    }

    public function logout()
    {
        app('tymon.jwt.auth')->logout();

        return response()->json(['message' => '登出成功']);
    }

    public function refresh()
    {
        return $this->respondWithToken(app('tymon.jwt.auth')->refresh());
    }

    public function getAuthUser(Request $request)
    {
        return response()->json(auth('tymon.jwt.auth')->user());
    }

    protected function respondWithToken($token)
    {
        $reuslt = new \stdClass();
        $reuslt->code = "1";
        $reuslt->message = "success";
        $reuslt->result = [
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => app('tymon.jwt.auth')->factory()->getTTL() * 60
        ];
        return response()->json($reuslt);
    }
}
