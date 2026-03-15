<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SiteContatoRepository;
use App\Repositories\SiteMotivoRepository;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;
use App\Repositories\Interfaces\SiteMotivoRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(SiteContatoRepositoryInterface::class,SiteContatoRepository::class);
         $this->app->bind(SiteMotivoRepositoryInterface::class,SiteMotivoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
