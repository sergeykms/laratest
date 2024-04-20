<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function createUser(Request $request)
    {
        $user = $request->all();

        return view('pages.create-form', [
            'user' => $user,
        ]);
    }

    public function viewForm()
    {
        return view('pages.view-form');
    }
}
