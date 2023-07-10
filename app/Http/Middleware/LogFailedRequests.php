<?php
namespace App\Http\Middleware;
use App\Models\CustomRouteStatistic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogFailedRequests {

    public function handle($request, \Closure  $next)
    {
        $response = $next($request);
        app('log')->info("Request Captured", $request->all());
        if ($response->getStatusCode() != 200) {
            $mytime = Carbon::now();
            CustomRouteStatistic::firstOrCreate([
                'user_id' => optional($request->user())->getKey(),
                'team_id' => 1,
                'method'  => $request->getMethod(),
                'route'   => $request->path(),
                'status'  => $response->getStatusCode(),
                'ip'      => $request->ip(),
                'date'    => $mytime->format('Y-m-d H'.':00:00'),
            ], ['counter' => 0])->increment('counter', 1);
        }

        return $response;
    }
}
