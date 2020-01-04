<?php

namespace App\Utils;

class ErrorHelper
{
    public static function message($message)
    {
        if(gettype($message)!=='array') $message = [$message];
        return response()->json($message,422);
    }
}