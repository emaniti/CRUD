<?php

namespace App\Http\Responses;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class APIResponse
{

    /**
     * @param string $title
     * @param string $detail
     * @param int $status
     * @param array $headers
     * @return JsonResponse
     */
    public static function ErrorsResponse(string $title, string $detail, int $status = 422, array $headers = []): JsonResponse
    {
        return Response()->json([
            'errors' => [
                'title' => $title,
                'detail' => $detail,
                'status' => $status,
            ]
        ], $status)->withHeaders($headers);
    }

    /**
     * @param array $headers
     * @return JsonResponse
     */
    public static function UserUnauthorized(array $headers = []): JsonResponse
    {
        return Response()->json([
            'errors' => [
                'title' => 'Login',
                'detail' => "User unauthorized",
                'status' => 401,
            ]
        ], 401)->withHeaders($headers);
    }

    /**
     * @param array $headers
     * @return JsonResponse
     */
    public static function UserForbidden(array $headers = []): JsonResponse
    {
        return Response()->json([
            'errors' => [
                'title' => 'Login',
                'detail' => "User doesn't have the sufficient permissions",
                'status' => 403,
            ]
        ], 403)->withHeaders($headers);
    }

    public static function LoginResponse($token, $user, array $headers = []): JsonResponse
    {
        return Response()->json([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,

        ], 200)->withHeaders($headers);
    }

    /**
     * @param $model
     * @param string $message
     * @param array $headers
     * @return JsonResponse
     */
    public static function CreatedSuccessfully($model, string $message, array $headers = []): JsonResponse
    {
        return Response()->json([
            'data' => $model,
            'message' => $message,
            'status' => 201,
        ], 201)->withHeaders($headers);
    }

    /**
     * @param $model
     * @param string $message
     * @param array $headers
     * @return JsonResponse
     */
    public static function UpdatedSuccessfully($model, string $message, array $headers = []): JsonResponse
    {
        return Response()->json([
            'data' => $model,
            'message' => $message,
            'status' => 200,
        ], 200)->withHeaders($headers);
    }

    /**
     * @param $message
     * @param array $headers
     * @return JsonResponse
     */
    public static function Success($message, array $headers = []): JsonResponse
    {
        return Response()->json([

            'message' => $message,
            'status' => 200,
        ], 200)->withHeaders($headers);
    }

}
