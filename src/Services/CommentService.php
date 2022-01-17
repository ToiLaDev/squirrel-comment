<?php

namespace Squirrel\Comment\Services;

use App\Services\RepositoryService;
use Squirrel\Comment\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentService extends RepositoryService implements CommentServiceImpl
{

    public function __construct(CommentRepository $commentRepo)
    {
        $this->firstRepo = $commentRepo;
    }
}