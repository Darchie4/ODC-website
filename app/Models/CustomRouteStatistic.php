<?php

namespace App\Models;

use Illuminate\Http\Request;

class CustomRouteStatistic extends \Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic{
    public function log(Request $request, $response, ?int $time = null, ?int $memory = null): void
    {
        if ($route = optional($request->route())->getName() ?? optional($request->route())->uri()) {
            static::firstOrCreate([
                'user_id' => optional($request->user())->getKey(),
                'method'  => $request->getMethod(),
                'route'   => $request->path(),
                'status'  => $response->getStatusCode(),
                'ip'      => $request->ip(),
                'date'    => $this->getDate(),
            ], ['counter' => 0])->increment('counter', 1);
        }
    }
}
