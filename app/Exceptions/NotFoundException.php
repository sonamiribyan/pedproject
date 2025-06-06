<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function render($request): mixed    
    {
        return response()->json([
            'message' => $this->getMessage() ?? 'Resource not found',
        ], 404);
    }

}
