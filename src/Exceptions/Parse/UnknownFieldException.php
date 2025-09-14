<?php

namespace Phoeni2020\RestAPI\Exceptions\Parse;

use Phoeni2020\RestAPI\Exceptions\ApiException;
use Phoeni2020\RestAPI\Exceptions\ErrorCodes;

class UnknownFieldException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_UNKNOWN_FILED_EXCEPTION;

    protected $message = "One of the specified fields does not exist";
}