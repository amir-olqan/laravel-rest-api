<?php

namespace Phoeni2020\RestAPI\Exceptions;

class UnauthorizedException extends ApiException
{
    protected $statusCode = 403;

    protected $code = ErrorCodes::UNAUTHORIZED_EXCEPTION;

    protected $message = "Not authorized to perform this request";
}