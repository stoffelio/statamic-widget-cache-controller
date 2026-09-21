<?php

namespace Stoffelio\CacheController\Widgets;

use Statamic\Widgets\Widget;

class CacheController extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        return view('stoffelio::widgets.cache_controller');
    }
}
