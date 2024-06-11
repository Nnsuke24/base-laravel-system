<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        return [
            'message' => 'Hello World!'
        ];
    }
}
