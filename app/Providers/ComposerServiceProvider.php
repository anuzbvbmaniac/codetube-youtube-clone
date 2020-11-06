<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function register() {
        //
    }


    public function boot() {
        view()->composer(
            'layouts.partials._navigation',
            \App\Http\ViewComposers\NavigationComposer::class
        );
    }
}
