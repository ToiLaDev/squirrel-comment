<?php

namespace Squirrel\Comment;

use App\Traits\ModuleServiceProviderTrait;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    use ModuleServiceProviderTrait;

    private $widgets = [
        'comment'   => [Comment::class, 'show'],
    ];

    //private $theme = true;
}
