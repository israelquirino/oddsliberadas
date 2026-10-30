<?php

namespace App\Providers;

use App\Contracts\CrawlerDetector;
use App\Http\Middleware\FacebookCloaker;
use App\Http\Middleware\GoogleCloaker;
use App\Services\FacebookCrawlerDetector;
use App\Services\GoogleCrawlerDetector;
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
        $this->app->when(FacebookCloaker::class)
            ->needs(CrawlerDetector::class)
            ->give(function () {
                return new FacebookCrawlerDetector(
                    file(base_path('facebook-crawler.txt'), FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES)
                );
            });

        $this->app->when(GoogleCloaker::class)
            ->needs(CrawlerDetector::class)
            ->give(function () {
                return new GoogleCrawlerDetector(
                    file(base_path('google-crawler.txt'), FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES)
                );
            });
    }
}
