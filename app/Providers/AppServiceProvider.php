<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SiteContatoRepository;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(SiteContatoRepositoryInterface::class,SiteContatoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
