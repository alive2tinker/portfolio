<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\PageView;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Unique views', count(PageView::where('page','home')->get())),
            Card::make('Resume Downloads', count(PageView::where('page','resume_download')->get())),
        ];
    }
}
