<?php

namespace Phoeni2020\RestAPI\Exceptions\Parse;

use Phoeni2020\RestAPI\Exceptions\ApiException;
use Phoeni2020\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}