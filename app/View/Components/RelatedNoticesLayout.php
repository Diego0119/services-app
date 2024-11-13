<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedNoticesLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $related_notices;

    public function __construct($relatedNotices)
    {
        $this->related_notices = $relatedNotices;
    }

    public function render()
    {
        return view('components.related-notices-layout');
    }
}
