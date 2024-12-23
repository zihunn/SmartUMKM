<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use pxlrbt\FilamentJavaScriptCharts\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BusinessTypeChart extends Widget
{
    protected static ?string $heading = 'Jenis Bisnis Client';

    protected function getData(): array
    {
        $data = DB::table('clients')
            ->select('business_type', DB::raw('count(*) as count'))
            ->groupBy('business_type')
            ->pluck('count', 'business_type');

        return [
            'labels' => $data->keys()->toArray(),
            'datasets' => [
                [
                    'label' => 'Jumlah Client',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'], // Sesuaikan warna
                ],
            ],
        ];
    }
}
