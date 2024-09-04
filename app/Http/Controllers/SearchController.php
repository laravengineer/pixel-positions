<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%' . request('query') . '%')->get();
        return view('jobs.results', ['jobs' => $jobs]);
    }
}
