<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }
}
