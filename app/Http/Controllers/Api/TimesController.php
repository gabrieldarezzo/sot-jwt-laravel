<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Times;

class TimesController extends Controller
{
    public function __construct(Times $model)
    {
        $this->model = $model;
    }
}
