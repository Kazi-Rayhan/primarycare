<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Helpers\MenuHelper;

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
        // Register Blade directive for dynamic menus
        Blade::directive('menu', function ($expression) {
            return "<?php echo App\Helpers\MenuHelper::renderMenu($expression); ?>";
        });
    }
}
