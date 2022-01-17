<?php

namespace Squirrel\Comment\Repositories;

use App\Repositories\Repository;
use Squirrel\Comment\Models\Comment;

class CommentRepository extends Repository implements CommentRepositoryImpl
{
    public function __construct(Comment $comment) {
        $this->_model = $comment;
    }
}