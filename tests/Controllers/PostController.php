<?php

namespace Phoeni2020\RestAPI\Tests\Controllers;

use Phoeni2020\RestAPI\ApiController;
use Phoeni2020\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}