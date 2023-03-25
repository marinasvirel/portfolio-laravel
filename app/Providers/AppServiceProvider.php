<?php

namespace App\Providers;

use App\QueryBuilders\CertificatesQueryBuilder;
use App\QueryBuilders\CompetenciesQueryBuilder;
use App\QueryBuilders\ProjectsQueryBuilder;
use App\QueryBuilders\QueryBuilder;
use App\QueryBuilders\UsersQueryBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(QueryBuilder::class, UsersQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, CompetenciesQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, ProjectsQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, CertificatesQueryBuilder::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
