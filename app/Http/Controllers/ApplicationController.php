<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function create($jobId)
    {
        $jobPost = Post::find($jobId);

        if (! $jobPost) {
            return back()->with('failed', 'Post not found');
        }

        $candidates = Candidate::where('user_id', Auth::user()->id)->first();
        if (! $candidates) {
            return back()->with('failed', 'Candidates not found');
        }
        //        dd($candidates->id);

        $apply = Application::create([
            'candidate_id' => $candidates->id,
            'job_id' => $jobPost->id,
        ]);

        return back()->with('success', 'Application submitted successfully');
    }

    public function cancel($applyId)
    {
        $apply = Application::find($applyId);
        if (! $apply) {
            return back()->with('failed', 'Application not found');
        }
        $apply->delete();

        return back()->with('success', 'Application cancelled successfully');
    }

    public function approve($applyId, $candidateId)
    {
        // Find the application by its applyId and candidateId
        $application = Application::where('id', $applyId)
            ->where('candidate_id', $candidateId)
            ->first();

        if (! $application) {
            return back()->with('failed', 'Application not found');
        }

        // Approve the application by changing its status
        $application->status = 'accepted';
        $application->save();

        return back()->with('success', 'Application approved successfully');
    }

    public function reject($applyId, $candidateId)
    {
        // Find the application by its applyId and candidateId
        $application = Application::where('id', $applyId)
            ->where('candidate_id', $candidateId)
            ->first();

        if (! $application) {
            return back()->with('failed', 'Application not found');
        }

        // Reject the application by changing its status
        $application->status = 'rejected';
        $application->save();

        return back()->with('success', 'Application rejected successfully');
    }
}
