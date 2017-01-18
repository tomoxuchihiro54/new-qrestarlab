<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('includes.nav_side', function ($view) {
        $nodes = Category::get()->toTree();
        foreach ($nodes as $node) {
          $grandchildren = $node->withDepth()->having('depth', '=', $node->id)->get();
        }
        $view
        ->with('nodes', $nodes)
        ->with('grandchildren', $grandchildren);
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
