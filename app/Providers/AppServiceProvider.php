<?php

namespace App\Providers;

use App\Services\Sms\FarazSmsProvider;
use App\Services\Sms\SmsServiceContext;
use App\Services\Sms\SmsServiceInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();

        $this->app->bind(SmsServiceInterface::class, function ($app) {
            // You can switch between different providers here based on your configuration.
            return new FarazSmsProvider();
        });

        $defaultProvider = config('sms.default_provider');

        $this->app->bind(SmsServiceContext::class, function ($app) use ($defaultProvider) {
            switch ($defaultProvider) {
                case 'faraz-sms':
                    return new FarazSmsProvider();
                    break;
                // Add other provider cases here.
                default:
                    throw new \Exception("Unknown SMS provider: {$defaultProvider}");
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
