<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Can_posts;

class CanPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $can_post = Can_posts::firstOrFail();
        if ($can_post["can_write"] < 1) {
            return redirect()->route("index");
        }
        return $next($request);
    }
}
