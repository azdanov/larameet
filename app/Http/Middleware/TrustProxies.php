<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

final class TrustProxies extends Middleware
{
    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * The trusted proxies for this application.
     *
     * @var string[]
     */
    protected $proxies = [];
}
