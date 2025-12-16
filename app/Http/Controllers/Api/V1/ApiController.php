<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    /**
     * Standard success response wrapper.
     *
     * @param mixed $data   The payload to return under "data".
     * @param array $meta   Optional metadata to include under "meta".
     * @param int   $status HTTP status code, default 200.
     */
    protected function success(mixed $data = null, array $meta = [], int $status = 200): JsonResponse
    {
        $payload = ['data' => $data];

        if (! empty($meta)) {                        

            $payload['meta'] = $meta;
        }

        return response()->json($payload, $status);
    }

    /**
     * Standard error response wrapper.
     *
     * @param string $code    Machine readable error code, like "NOT_FOUND".
     * @param string $message Human readable message.
     * @param array  $details Optional extra details (for example validation errors).
     * @param int    $status  HTTP status code, default 400.
     */
    protected function error( string $code, string $message, array $details = [], int $status = 400 ): JsonResponse {
        $payload = [
            'error' => [
                'code'    => $code,
                'message' => $message,
            ],
        ];

        if (! empty($details)) {
            $payload['error']['details'] = $details;
        }

        return response()->json($payload, $status);
    }
}
