<?php

namespace App\Models;
use Stevebauman\Location\Facades\Location;

use Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic;
use Illuminate\Http\Request;

class CustomRouteStatistic extends RouteStatistic{
    public function log(Request $request, $response, ?int $time = null, ?int $memory = null): void
    {
        if ($route = optional($request->route())->getName() ?? optional($request->route())->uri()) {
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
            static::firstOrCreate([
                'user_id' => optional($request->user())->getKey(),
                'method'  => $request->getMethod(),
                'route'   => $request->path(),
                'status'  => $response->getStatusCode(),
                'user_location_id' => $userLocation!=null ? $userLocation->id : null,
                'date'    => $this->getDate(),
            ], ['counter' => 0])->increment('counter', 1);
        }
    }
}
