<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiClientToken
{
    private const HEADER_NAME = 'X-Api-Client';

    /**
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->hasHeader(self::HEADER_NAME)) {
            abort(401);
        }

        if($request->header(self::HEADER_NAME) !== config('app.api_client_token')) {
            abort(401);
        }

        return $next($request);
    }
}
