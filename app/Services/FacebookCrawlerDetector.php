<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\CrawlerDetector;
use App\ValueObjects\Http\Ip;
use Symfony\Component\HttpFoundation\IpUtils;

final readonly class FacebookCrawlerDetector implements CrawlerDetector
{
    /**
     * @param  list<int, string>  $ranges
     */
    public function __construct(
        private array $ranges
    ) {
    }

    /**
     * @param  Ip  $ip
     * @return bool
     */
    public function match(Ip $ip): bool
    {
        return IpUtils::checkIp($ip->ip, $this->ranges);
    }
}