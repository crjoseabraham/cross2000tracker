<?php

namespace App\Charts;

use App\Models\Workout;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GeneralWorkoutsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $workouts = Workout::select('athlete_id', 'date', 'total')
            ->groupBy('athlete_id', 'date', 'total')
            ->orderByRaw("CAST(total as UNSIGNED) DESC")
            ->get();

        $athletes = $workouts->unique('athlete_id');

        $averages = $athletes->map(function ($ath) {
            return [
                'name' => $ath->athlete->name,
                'value' => number_format($ath->where('athlete_id', $ath->athlete_id)->avg('total'), 1, '.', ',')
            ];
        });

        $names = $averages->map(function ($record) {
            return $record['name'];
        })->toArray();

        $avgs = $averages->map(function ($record) {
            return $record['value'];
        })->toArray();

        return $this->chart->horizontalBarChart()
            ->setTitle('Promedios de cada persona (general)')
            ->setSubtitle('El maximo es 100, que indicaria que obtuviste 100% en todos tus ejercicios')
            ->setLabels(['a', 'b', 'c', 'd', 'e', 'f', 'g'])
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('Promedio', [...$avgs])
            ->setXAxis([...$names])
            ->setMarkers(['#FF5722', '#E040FB'], 7, 10);
    }
}
