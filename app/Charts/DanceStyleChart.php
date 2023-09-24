<?php

namespace App\Charts;

use App\Models\CustomRouteStatistic;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class DanceStyleChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $subquery1 = DB::table('custom_route_statistics_OLD')
            ->select('route')
            ->where('route', 'LIKE', 'schedule/%')
            ->get()
            ->pluck('route')
            ->toArray();

        $subquery2 = CustomRouteStatistic::select('route')
            ->where('route', 'LIKE', 'schedule/%')
            ->get()
            ->pluck('route')
            ->toArray();

        $combinedRoutes = array_merge($subquery1, $subquery2);

        $results = DB::table('dance_styles')
            ->whereIn(DB::raw("CONCAT('schedule/', dance_styles.id)"), $combinedRoutes)
            ->select('dance_styles.name', DB::raw('COUNT(*) as count'))
            ->groupBy('dance_styles.name')
            ->orderByRaw('COUNT(*) DESC')
            ->get();

        return $this->chart->barChart()
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->setDataset(
                $results->toArray()
            );
    }
}
