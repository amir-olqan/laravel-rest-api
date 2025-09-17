<?php

namespace AmirOlqan\RestAPI\Tests\Controllers;

use AmirOlqan\RestAPI\ApiController;
use AmirOlqan\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}