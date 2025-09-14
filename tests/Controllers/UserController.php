<?php

namespace Phoeni2020\RestAPI\Tests\Controllers;

use Phoeni2020\RestAPI\ApiController;
use Phoeni2020\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}