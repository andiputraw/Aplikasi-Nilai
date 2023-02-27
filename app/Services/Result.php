<?php

namespace App\Services;

class Result
{

    public bool $isSuccess;
    public string $reason;

    public function __construct(bool $success, string $reason = '')
    {
        $this->isSuccess = $success;
        $this->reason = $reason;
    }
}
