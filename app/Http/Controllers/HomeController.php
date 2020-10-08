<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Social;
use App\Models\Tecnology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'experience' => Experience::ordered()->get(),
            'tecnologies' => Tecnology::ordered()->get(),
            'projects' => Project::ordered()->get(),
            'socials' => Social::ordered()->get()
        ]);
    }
}
