<?php

namespace Bertshang\Api;

use Exception;
use Illuminate\Http\JsonResponse;

class ResponseFactory
{
    public static function make(Exception $e)
    {
        return new JsonResponse([
            'status' => 'error'
        ]);
    }
}
