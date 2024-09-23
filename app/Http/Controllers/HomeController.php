<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            return redirect('admin-dashboard');
        }
        $posts = [];
        $applied_posts = [];
        if (Auth::user()->role === 'employer') {
            $employerId = Employer::where('user_id', Auth::user()->id)->get()->first()->id;
            $posts = Post::where('employer_id', $employerId)->get();
            $applied_posts = Application::with(['post', 'candidate'])->whereIn('job_id', $posts->pluck('id'))->get();
        }
        $applications = [];
        if (Auth::user()->role === 'candidate') {
            $candidateId = Candidate::where('user_id', Auth::user()->id)->get()->first()->id;
            $applications = Application::with(['candidate', 'post'])
                ->where('candidate_id', $candidateId)
                ->get();
        }

        return view('user.profile', compact('posts', 'applications', 'applied_posts'));
    }
}
