<?php
namespace Phoeni2020\RestAPI\Exceptions\Parse;

use Phoeni2020\RestAPI\Exceptions\ApiException;
use Phoeni2020\RestAPI\Exceptions\ErrorCodes;

class MaxLimitException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_MAX_LIMIT;

    protected $message = "Requested more records than maximum limit in single request";
}