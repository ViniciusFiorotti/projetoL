<?php

namespace App\Http\Controllers\Site;

class SiteController
{
    public function contact()
    {
            return view('site/contact');
    }

    public function paginas()
    {
            return view('site/paginas');
    }
}
