<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Comment;
use App\Follows;
use App\Like;
use App\Post;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding of models
     *
     * @var array
     */
    private $models = [
        'User',
        'UserToken'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->models as $model) {
            $this->app->bind(
                "App\Repositories\Interfaces\\{$model}RepositoryInterface",
                "App\Repositories\Eloquents\\{$model}Repository"
            );
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}