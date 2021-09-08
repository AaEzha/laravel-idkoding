<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RobotMiddleware extends \Spatie\RobotsMiddleware\RobotsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    /**
     * @return string|bool
     */
    protected function shouldIndex(Request $request)
    {
        $exclude = [
            'member',
        ];

        return (in_array($request->segment(1), $exclude)) ? false : true;
    }
}
