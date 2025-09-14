<?php

namespace Phoeni2020\RestAPI\Tests\Controllers;

use Phoeni2020\RestAPI\ApiController;
use Phoeni2020\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}