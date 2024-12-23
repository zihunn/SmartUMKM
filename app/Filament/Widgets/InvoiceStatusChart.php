<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;

class InvoiceStatusChart extends Widget
{
    protected static string $view = 'filament.widgets.invoice-status-chart';

    public function getData(): array
    {
        $data = DB::table('invoices')
            ->select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');

        return [
            'labels' => $data->keys()->toArray(),
            'data' => $data->values()->toArray(),
        ];
    }
}
