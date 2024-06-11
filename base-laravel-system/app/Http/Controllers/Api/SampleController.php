<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Nnsuke24\PhpLibrary\Sample;

class SampleController extends Controller
{
    public function index()
    {
        $sample = new Sample();
        return [
            'message' => $sample->sample()
        ];
    }
}
