<?php

namespace Cendekia\EmailSubscribers\Http\Middleware;

use Cendekia\EmailSubscribers\EmailSubscribers;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(EmailSubscribers::class)->authorize($request) ? $next($request) : abort(403);
    }
}
