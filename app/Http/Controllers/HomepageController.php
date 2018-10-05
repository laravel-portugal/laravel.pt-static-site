<?php

namespace App\Http\Controllers;

use JavaScript;

class HomepageController extends Controller
{
    public function index()
    {
        JavaScript::put([
            'jsvars' => [
                'loaded' => true,
            ]
        ]);

        return view('homepage');
    }
}
