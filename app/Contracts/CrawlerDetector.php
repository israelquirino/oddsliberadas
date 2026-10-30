<?php

namespace App\Contracts;

use App\ValueObjects\Http\Ip;

interface CrawlerDetector
{
    public function match(Ip $ip): bool;
}