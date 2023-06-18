<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function index(string $category)
    {
        return view('_partials/_category_'.$category);
    }
}
