<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show(Request $request)
    {
        //        dd($request);
        $search = $request->query('Search');
        $location = $request->query('location');
        $categories = $request->query('categories');
        $datePosted = $request->query('date_posted');
        $experience_level = $request->query('experience_level');

        // Define the query
        $query = Post::with('user');

        // Apply filters based on query parameters
        if ($search) {
            $query->where(function ($query) use ($search) {
                // Search in title and description
                $query->where('job_title', 'like', '%'.$search.'%')
                    ->orWhere('job_description', 'like', '%'.$search.'%');

                // Search in JSON fields
                $query->orWhere(function ($query) use ($search) {
                    // Search within JSON array for MySQL
                    $query->whereRaw("JSON_UNQUOTE(JSON_EXTRACT(keywords, '$[0]')) LIKE ?", ['%'.$search.'%'])
                        ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(keywords, '$[1]')) LIKE ?", ['%'.$search.'%'])
                        ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(keywords, '$[2]')) LIKE ?", ['%'.$search.'%']);
                    // Add more orWhereRaw lines if you have more elements in your JSON array
                })
                    ->orWhere(function ($query) use ($search) {
                        // Search within JSON array for requirements
                        $query->whereRaw("JSON_UNQUOTE(JSON_EXTRACT(requirements, '$[0]')) LIKE ?", ['%'.$search.'%'])
                            ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(requirements, '$[1]')) LIKE ?", ['%'.$search.'%'])
                            ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(requirements, '$[2]')) LIKE ?", ['%'.$search.'%']);
                        // Add more orWhereRaw lines if you have more elements in your JSON array
                    });
            });
        }

        if ($location) {
            $query->where('location', $location);
        }

        if ($categories) {
            $query->where('job_category', $categories);
        }
        if ($experience_level) {
            $query->where('experience_level', $experience_level);
        }

        if ($datePosted) {
            $now = now();
            switch ($datePosted) {
                case '1 hour':
                    $query->where('created_at', '>=', $now->subHour());
                    break;
                case '24 hours':
                    $query->where('created_at', '>=', $now->subDay());
                    break;
                case '7 days':
                    $query->where('created_at', '>=', $now->subDays(7));
                    break;
                case '14 days':
                    $query->where('created_at', '>=', $now->subDays(14));
                    break;
                case '30 days':
                    $query->where('created_at', '>=', $now->subDays(30));
                    break;
            }
        }

        // Paginate the results
        $jobs = $query->paginate(10);

        return view('job-post.job-post', compact('jobs'));
    }

    public function detail($id) {}

    public function createJob(Request $request)
    {
        //        dd($request);
        //        return back()->with('failed', 'Employer not found.');
        $employer = Employer::where('user_id', Auth::user()->id)->first();
        if (! $employer) {
            return back()->with('failed', 'Employer not found.');
        }

        $request->validate([
            //            'employer_id' => 'required|exists:employers,id', // Ensure employer exists in the 'employers' table
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'requirements' => 'nullable|array',
            'location' => [
                'nullable',
                'string',
                'in:Cairo,Alexandria,Giza,Port Said,Suez,Luxor,Aswan,Asyut,Beheira,Beni Suef,Dakahlia,Damietta,Faiyum,Gharbia,Ismailia,Kafr El Sheikh,Minya,Monufia,New Valley,Qalyubia,Qena,Red Sea,Sharqia,Sohag,South Sinai,North Sinai,Matrouh',
            ],
            'work_type' => [
                'required',
                'string',
                'in:Full-time,Part-time,Remote,Contract',
            ],
            'salary_range' => 'nullable|string|max:255',
            'application_deadline' => 'nullable|date|after_or_equal:today',
            'job_category' => [
                'nullable',
                'string',
                'in:Information Technology,Healthcare,Finance,Education,Manufacturing,Retail,Transportation,Hospitality,Construction,Real Estate,Telecommunications,Agriculture,Energy,Entertainment,Legal Services,Marketing and Advertising,Non-Profit,Public Sector,Professional Services,Consulting,Media,Automotive,Pharmaceuticals,Aerospace,Environmental Services,Logistics and Supply Chain,Human Resources,E-commerce,Food and Beverage,Sports and Recreation',
            ],
            'keywords' => 'nullable|array',
            'experience_level' => [
                'required',
                'string', 'in:Junior, Mid, Senior, Lead',
            ],
        ]);
        //        dd($request);
        $jobPost = Post::create([
            'employer_id' => $employer->id, // Employer ID linked to the job post
            'job_title' => $request->input('job_title'),
            'job_description' => $request->input('job_description'),
            'requirements' => $request->has('requirements') ? json_encode($request->input('requirements')) : null,  // Convert array to JSON
            'location' => $request->input('location'),
            'work_type' => $request->input('work_type'),
            'salary_range' => $request->input('salary_range'),
            'application_deadline' => $request->input('application_deadline'),
            'job_category' => $request->input('job_category'),
            'keywords' => $request->has('keywords') ? json_encode($request->input('keywords')) : null,  // Convert array to JSON
            'experience_level' => $request->input('experience_level'),
        ]);

        return back()->with('success', 'Job created successfully.');
    }
}
