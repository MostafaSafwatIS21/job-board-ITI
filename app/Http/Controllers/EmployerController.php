<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployerController extends Controller
{
    public function show(Request $request)
    {

        $search = $request->query('Search');
        $location = $request->query('location');
        $categories = $request->query('categories');

        $query = Employer::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                // Search in title and description
                $query->where('company_name', 'like', '%'.$search.'%')
                    ->orWhere('company_description', 'like', '%'.$search.'%');
            });
        }
        if ($location) {
            $query->where('location', $location);
        }

        if ($categories) {
            $query->where('categories', $categories);
        }

        $employers = $query->paginate(10);

        return view('employer.employer', compact('employers'));
    }

    public function detail(Request $request) {}

    public function update(Request $request, $userId)
    {
        //        $employers = Employer::where('user_id', $userId)->get();

        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional, must be an image with max size 2MB
            'company_website' => 'nullable|active_url|url|max:150',
            'company_description' => 'nullable|string|max:1000', // Optional, max 1000 characters
            'company_email' => 'nullable|email|max:255',
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
            'location' => [
                'required',
                Rule::in([
                    'Cairo', 'Alexandria', 'Giza', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Asyut',
                    'Beheira', 'Beni Suef', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Ismailia',
                    'Kafr El Sheikh', 'Minya', 'Monufia', 'New Valley', 'Qalyubia', 'Qena', 'Red Sea',
                    'Sharqia', 'Sohag', 'South Sinai', 'North Sinai', 'Matrouh',
                ]),
            ],
        ]);

        $data = $request->all();
        $avatarPath = 'employer/defaults-icons.png';  // Default image path

        if ($request->hasFile('company_logo')) {
            $avatar = $request->file('company_logo');
            $extension = $avatar->getClientOriginalExtension();
            $timestamp = Carbon::now()->timestamp;
            $newFilename = $timestamp.'.'.$extension;

            $avatarPath = $avatar->storeAs('employer', $newFilename, 'public');
        }

        $data['company_logo'] = $avatarPath;

        $employer = Employer::where('user_id', $userId)->firstOrFail();

        $employer->update($data);

        return view('employer.employer');
    }

    // will move to posts controller.

}
