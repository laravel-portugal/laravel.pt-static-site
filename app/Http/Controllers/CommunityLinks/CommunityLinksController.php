<?php

namespace App\Http\Controllers\CommunityLinks;

use JavaScript;
use App\Http\Controllers\Controller;

class CommunityLinksController extends Controller
{
    public function index()
    {
        JavaScript::put([
            'jsvars' => [
                'loaded' => true,
            ]
        ]);

        return view('sections.community-links.index');
    }
}
