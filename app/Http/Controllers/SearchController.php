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
        // Perform search logic with eager loading
        $query = Job::query()
            ->with(['tags', 'employer'])
            ->where('title', 'like', '%'.$request->input('q').'%');

        return view('results', ['jobs' => $query]);
    }
}
