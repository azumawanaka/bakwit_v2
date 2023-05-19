<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        User::find(auth()->user()->id)->update(['is_policy_checked' => isset($request->is_policy_checked)]);
       return redirect()->back();
    }
}
