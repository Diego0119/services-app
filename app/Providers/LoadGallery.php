<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\HighlightedNotice;
use Illuminate\Support\Facades\View;
use App\Models\Notice;
class LoadGallery extends ServiceProvider
{
    /**
     * Register services.
     */
    public function boot()
    {
        View::composer('components.gallery-layout', function ($view) {
            $highlighted_notices = HighlightedNotice::where('is_active', true)->get();

            $highlighted_ids = $highlighted_notices->pluck('notice_id');

            $notices = Notice::whereIn('id', $highlighted_ids)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();

            $view->with('galleryNotices', $notices);
        });
    }

    /**
     * Bootstrap services.
     */
    public function register()
    {
        //
    }
}
