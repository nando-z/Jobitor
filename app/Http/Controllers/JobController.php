<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {

        $jobs = Job::with(['tags', 'employer'])->get()->groupBy('featured');
        $tags = Tag::get();

        return view('job.index', [
            'featuredJobs' => $jobs[0],
            'jobs' => $jobs[1],
            'tags' => $tags,
        ]);
    }

    public function create()
    {
        return view('job.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'max:255', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url', 'max:255'],
            'tags' => ['nullable'],
        ]);
        $data['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($data, 'tags'));

        if (isset($data['tags'])) {
            $job->tags()->attach($data['tags']);
        }

        return redirect()->route('home')->with('success', 'Job created successfully.');
    }
}
