<?php

namespace App\Http\Controllers;

use App\Models\Evacuee;
use Illuminate\Http\Request;

class EvacueeController extends Controller
{
    public function __construct() {
    }

    public function index(Evacuee $evacuee, Request $request)
    {
        dd($evacuee);
        return view('pages.evacuation_center.index', []);
    }
}
