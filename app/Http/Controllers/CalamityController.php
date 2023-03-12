<?php

namespace App\Http\Controllers;

use App\Models\Calamity;
use Illuminate\Http\Request;

class CalamityController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.calamity.index', [
            'calamity' => Calamity::first(),
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $calamity = Calamity::first();
        if ($calamity !== null) {
            $calamity->update($request->all());
        } else {
            Calamity::create($request->all());
        }

        return redirect()->back();
    }
}
