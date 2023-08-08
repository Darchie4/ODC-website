<?php
namespace App\Http\Middleware;
use App\Models\CustomRouteStatistic;
use App\Models\UserLocation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;

class LogFailedRequests {

    public function handle($request, \Closure  $next)
    {
        $response = $next($request);
        app('log')->info("Request Captured", $request->all());
        if ($response->getStatusCode() != 200) {
            $userLocation = null;

            if($rawLocation = Location::get($request->ip())){
                $userLocation = UserLocation::firstOrCreate([
                    'ip' => $request->ip(),
                    'countryName' => $rawLocation->countryName,
                    'countryCode' => $rawLocation->countryCode,
                    'regionCode' => (int)$rawLocation->regionCode,
                    'regionName' => $rawLocation->regionName,
                    'cityName' => $rawLocation->cityName,
                    'zipCode' => (int)$rawLocation->zipCode,
                    'latitude' => (double)$rawLocation->latitude,
                    'longitude' => (double)$rawLocation->longitude,
                ])->save();
            }
            $mytime = Carbon::now();
            CustomRouteStatistic::firstOrCreate([
                'user_id' => optional($request->user())->getKey(),
                'team_id' => 1,
                'method'  => $request->getMethod(),
                'route'   => $request->path(),
                'status'  => $response->getStatusCode(),
                'user_location_id' => $userLocation!=null ? $userLocation->id : null,
                'date'    => $mytime->format('Y-m-d H'.':00:00'),
            ], ['counter' => 0])->increment('counter', 1);
        }

        return $response;
    }
}
