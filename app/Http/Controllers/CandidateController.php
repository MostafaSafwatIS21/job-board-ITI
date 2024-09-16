<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CandidateController extends Controller
{
    public function show(Request $request)
    {

        $search = $request->query('Search');
        $location = $request->query('location');
        $categories = $request->query('categories');

        $query = Candidate::with('user');
        //        dd($query->user);

        if ($search) {
            $query->where(function ($query) use ($search) {
                // Search in title and description
                $query->where('job_title', 'like', '%'.$search.'%')
                    ->orWhere('description', 'like', '%'.$search.'%');
            });

            $query->orWhere(function ($query) use ($search) {
                // Search within JSON array for MySQL
                $query->whereRaw("JSON_UNQUOTE(JSON_EXTRACT(skills, '$[0]')) LIKE ?", ['%'.$search.'%'])
                    ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(skills, '$[1]')) LIKE ?", ['%'.$search.'%'])
                    ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(skills, '$[2]')) LIKE ?", ['%'.$search.'%']);
                // Add more orWhereRaw lines if you have more elements in your JSON array
            });
        }
        if ($location) {
            $query->where('location', $location);
        }

        if ($categories) {
            $query->where('categories', $categories);
        }

        $candidates = $query->paginate(10);

        return view('candidate.candidate', compact('candidates'));
    }

    public function update(Request $request, $userId)
    {
        //        $candidate = Candidate::where('user_id', $userId)->get();
        //        dd($candidate, $request);
        //        dd($request->all());
        $request->validate([
            'name' => 'required',
            'resume' => 'file|mimes:pdf,doc,docx|max:2048',  // Validate file type and size
            'skills' => 'required|array',  // Array of skills
            'skills.*' => 'string|max:255',  // Each skill should be a string
            'experience_level' => [
                'nullable',
                Rule::in(['Entry', 'Mid', 'Senior']),
            ],
            'categories' => [
                'required',
                Rule::in([
                    'Information Technology', 'Healthcare', 'Finance', 'Education', 'Manufacturing',
                    'Retail', 'Transportation', 'Hospitality', 'Construction', 'Real Estate',
                    'Telecommunications', 'Agriculture', 'Energy', 'Entertainment', 'Legal Services',
                    'Marketing and Advertising', 'Non-Profit', 'Public Sector', 'Professional Services',
                    'Consulting', 'Media', 'Automotive', 'Pharmaceuticals', 'Aerospace',
                    'Environmental Services', 'Logistics and Supply Chain', 'Human Resources',
                    'E-commerce', 'Food and Beverage', 'Sports and Recreation',
                ]),
            ],
            'experience_time' => [
                'required',
                Rule::in(['1 Year', '2 Year', '3 Year', '4 Year', 'fresh']),
            ],
            'location' => [
                'required',
                Rule::in([
                    'Cairo', 'Alexandria', 'Giza', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Asyut',
                    'Beheira', 'Beni Suef', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Ismailia',
                    'Kafr El Sheikh', 'Minya', 'Monufia', 'New Valley', 'Qalyubia', 'Qena', 'Red Sea',
                    'Sharqia', 'Sohag', 'South Sinai', 'North Sinai', 'Matrouh',
                ]),
            ],
            'job_title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $resumePath = '';
        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $extension = $resume->getClientOriginalExtension();

            $timestamp = Carbon::now()->timestamp;
            $newFilename = $timestamp.'.'.$extension;

            $resumePath = $resume->storeAs('candidate', $newFilename, 'public');
        }

        $data = $request->all(); // Get all the request data
        $data['resume'] = $resumePath; // Add the new resume path to the data array

        $candidate = Candidate::where('user_id', $userId)->first();

        if ($candidate) {
            $candidate->update($data);
        } else {
            // Handle the case when the candidate is not found
            return back()->with('failed', 'Candidate not found.');
        }

        // Remove the dump (dd) once you're sure it's working
        return back()->with('success', 'Updated Successfully');
    }
}
