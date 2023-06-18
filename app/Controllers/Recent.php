<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Recent extends BaseController
{
    public function index()
    {
        return view('_partials/_recent');
    }
}
