<?php

namespace AmirOlqan\RestAPI\Tests\Controllers;

use AmirOlqan\RestAPI\ApiController;
use AmirOlqan\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}