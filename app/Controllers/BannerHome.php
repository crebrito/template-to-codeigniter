<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BannerHome extends BaseController
{
    public function index()
    {
        return view('fetch/_bannerHome');
    }
}
