<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // Perform search logic here
        $query = Job::where('title', 'like', '%'.$request->input('q').'%')->get();

        return view('results', ['jobs' => $query]);
    }
}
