<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;

class ProjectStatusChart extends Widget
{
    protected static ?string $heading = 'Status Proyek';

    protected function getData(): array
    {
        $data = DB::table('projects')
            ->select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');

        return [
            'labels' => $data->keys()->toArray(),
            'datasets' => [
                [
                    'label' => 'Jumlah Proyek',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'], // Sesuaikan warna
                ],
            ],
        ];
    }
}
