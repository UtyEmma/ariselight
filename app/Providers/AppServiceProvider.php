<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void {
        if(env('APP_ENV') == 'production'){
            $url->forceScheme('https');
        }

        View::share([
            'settings' => new Settings()
        ]);
    }
}
