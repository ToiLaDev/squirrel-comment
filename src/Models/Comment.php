<?php

namespace Squirrel\Comment\Models;

use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Base {
    use SoftDeletes;

    public function commentable()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->morphTo();
    }
}
