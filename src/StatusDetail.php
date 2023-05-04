<?php

namespace HttpStatusCodes;

class StatusDetail
{
    public function __construct(
        public readonly StatusCode $statusCode,
        public readonly int        $code,
        public readonly string     $title,
        public readonly string     $desc,
    )
    {
    }
}