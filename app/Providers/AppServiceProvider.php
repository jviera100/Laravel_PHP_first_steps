<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;


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
    public function boot(): void
    {
        Blade::directive('formatearfecha', function ($valor) {
            return "<?php echo ($valor)->format('d/m/Y'); ?>";
        });
        //
    }
}



