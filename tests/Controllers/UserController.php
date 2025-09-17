<?php

namespace AmirOlqan\RestAPI\Tests\Controllers;

use AmirOlqan\RestAPI\ApiController;
use AmirOlqan\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}