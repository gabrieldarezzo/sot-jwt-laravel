<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class ProductsController extends Controller
{
    public function __construct(Products $model)
    {
        $this->model = $model;
    }
}
