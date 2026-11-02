<?php

namespace App\Providers;

use App\Contracts\CrawlerDetector;
use App\Http\Middleware\Cloaker;
use App\Services\CrawlerDetectorService;
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
        $this->app->when(Cloaker::class)
            ->needs(CrawlerDetector::class)
            ->give(function () {
                $crawlerList = fn(string $file): array|false => file(base_path($file), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                return new CrawlerDetectorService(
                    [
                        new FacebookCrawlerDetector($crawlerList('facebook-crawler.txt')),
                        new GoogleCrawlerDetector($crawlerList('google-crawler.txt')),
                    ]
                );
            });
    }
}
