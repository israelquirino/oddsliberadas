<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\CrawlerDetector;
use App\ValueObjects\Http\Ip;

final readonly class CrawlerDetectorService implements CrawlerDetector
{

    /**
     * @param  array<CrawlerDetector>  $cloakers
     */
    public function __construct(
        private array $cloakers
    ) {
    }


    public function match(Ip $ip): bool
    {
        foreach ($this->cloakers as $cloaker) {
            if ($cloaker->match($ip)) {
                return true;
            }
        }

        return false;
    }
}