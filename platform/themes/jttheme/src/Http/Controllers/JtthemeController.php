<?php

namespace Theme\Jttheme\Http\Controllers;

use Illuminate\Routing\Controller;

class JtthemeController extends Controller
{
    /**
     * @return string
     * 
     */
    public function getTest()
    {
        // return Theme::scope('test')->render(); You can create a view (public/themes/ripple/views/test.blade.php) to show data.
        return 'This is a test route';
    }
}