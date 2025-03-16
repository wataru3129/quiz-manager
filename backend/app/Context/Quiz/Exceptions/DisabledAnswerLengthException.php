<?php

namespace App\Context\Quiz\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class DisabledAnswerLengthException extends Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }

    public function report(): void
    {
        // ログ出力
        Log::error($this->getMessage());
    }
}
