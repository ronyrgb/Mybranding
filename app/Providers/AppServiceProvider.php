<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SiteContatoRepository;
use App\Repositories\SiteMotivoRepository;
use App\Repositories\SiteLogRepository;
use App\Repositories\SiteFornecedorRepository;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;
use App\Repositories\Interfaces\SiteMotivoRepositoryInterface;
use App\Repositories\Interfaces\SiteLogRepositoryInterface;
use App\Repositories\Interfaces\SiteFornecedorRepositoryInterface;
use App\Services\SiteFornecedorService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(SiteContatoRepositoryInterface::class,SiteContatoRepository::class);
         $this->app->bind(SiteMotivoRepositoryInterface::class,SiteMotivoRepository::class);
         $this->app->bind(SiteLogRepositoryInterface::class,SiteLogRepository::class);
         $this->app->bind(SiteFornecedorRepositoryInterface::class,SiteFornecedorRepository::class);
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
