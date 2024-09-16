@extends('layouts.app')

@section('title')
    Profile
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/JQuery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.css">

    <!-- Bootstrap Tags Input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <style>
        .bootstrap-tagsinput {
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            background-color: #f8f9fa;
            padding: .375rem .75rem;
            box-shadow: inset 0 0 0 rgba(0, 0, 0, .125);
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            background: #007bff;
            color: #fff;
            border-radius: .25rem;
            padding: 0.2rem 0.5rem;
            display: inline-flex;
            align-items: center;
            font-size: .875rem;
        }

        .bootstrap-tagsinput .tag .remove {
            margin-left: 0.5rem;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
        }

        .bootstrap-tagsinput .tag .remove:hover {
            color: #fff;
            text-decoration: underline;
        }

        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            background: transparent;
            padding: 0;
            margin: 0;
        }

        /* styles.css */
        .show {
            display: block;
        }

        .hidden {
            display: none;
        }

        .body {
            font-family: no-serif, serif;
        }
    </style>
    <div class="body u-body u-xxl-mode" data-path-to-root="./" data-include-products="false"
         data-lang="en">
        <section
            class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-1 show"
            id="section1">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">

                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-8">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div onclick="toggleSection(1)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-list-item u-radius u-repeater-item u-shape-round u-list-item-5">
                                            <div class="u-container-layout u-similar-container u-container-layout-9">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-17">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-6"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-6">
                                            <div class="u-container-layout u-similar-container u-container-layout-10">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-18">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-7"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-7">
                                            <div class="u-container-layout u-similar-container u-container-layout-11">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-19">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-8"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-8">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-20">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-9">
                                            <div class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-21">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}}
                                                    ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-10">
                                            <div class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-22">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-11"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="../../../index.html"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-2">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-3">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="u-clearfix u-valign-middle u-section-2 hidden" id="section2">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">
                            <div class="mx-auto w-100" style="max-width: 70%;">
                                <h1 class="fs-2">Edit Profile</h1>

                                {{--  {{$route = Auth::user()->role}}--}}
                                @if(Auth::user()->role ==='employer')
                                    <form class="mb-3" method="POST"
                                          action="{{route(Auth::user()->role.'.update',Auth::user()->id)}}"
                                          enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="company_name" class="form-label">Company Name</label>
                                                <input id="company_name" name="company_name" type="text"
                                                       autocomplete="name"
                                                       class="form-control @error('company_name') is-invalid @enderror"
                                                       value="{{ old('company_name') }}">
                                                @error('company_name')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input id="email" name="email" type="email" autocomplete="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       value="{{ old('email') }}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="categories" class="form-label">Categories</label>
                                                <select id="categories" name="categories"
                                                        class="form-control @error('categories') is-invalid @enderror">
                                                    <option value="">Select a category</option>
                                                    @foreach ([
                                                        'Information Technology',
                                                        'Healthcare',
                                                        'Finance',
                                                        'Education',
                                                        'Manufacturing',
                                                        'Retail',
                                                        'Transportation',
                                                        'Hospitality',
                                                        'Construction',
                                                        'Real Estate',
                                                        'Telecommunications',
                                                        'Agriculture',
                                                        'Energy',
                                                        'Entertainment',
                                                        'Legal Services',
                                                        'Marketing and Advertising',
                                                        'Non-Profit',
                                                        'Public Sector',
                                                        'Professional Services',
                                                        'Consulting',
                                                        'Media',
                                                        'Automotive',
                                                        'Pharmaceuticals',
                                                        'Aerospace',
                                                        'Environmental Services',
                                                        'Logistics and Supply Chain',
                                                        'Human Resources',
                                                        'E-commerce',
                                                        'Food and Beverage',
                                                        'Sports and Recreation',
                                                    ] as $category)
                                                        <option
                                                            value="{{ $category }}" {{ old('categories') == $category ? 'selected' : '' }}>
                                                            {{ $category }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('categories')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <select id="location" name="location"
                                                        class="form-control @error('location') is-invalid @enderror">
                                                    <option value="">Select a location</option>
                                                    @foreach ([
                                                        'Cairo', 'Alexandria', 'Giza', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Asyut',
                                                        'Beheira', 'Beni Suef', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Ismailia',
                                                        'Kafr El Sheikh', 'Minya', 'Monufia', 'New Valley', 'Qalyubia', 'Qena', 'Red Sea',
                                                        'Sharqia', 'Sohag', 'South Sinai', 'North Sinai', 'Matrouh'
                                                    ] as $location)
                                                        <option
                                                            value="{{ $location }}" {{ old('location') == $location ? 'selected' : '' }}>
                                                            {{ $location }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('location')
                                                <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="company_website" class="form-label">Company Website</label>
                                                <input id="company_website" name="company_website" type="text"
                                                       autocomplete=""
                                                       class="form-control @error('company_website') is-invalid @enderror"
                                                       value="{{ old('company_website') }}">
                                                @error('company_website')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="company_logo" class="form-label">Company Logo</label>
                                                <input id="company_logo" name="company_logo" type="file"
                                                       class="form-control @error('company_logo') is-invalid @enderror">
                                                @error('company_logo')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 w-100">
                                                <label for="company_description" class="form-label">Company
                                                    Description</label>
                                                <textarea id="company_description" name="company_description"
                                                          autocomplete=""
                                                          class="form-control @error('company_description') is-invalid @enderror h-100 mb-4"></textarea>

                                                @error('company_description')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center m-5">
                                            <button type="submit" class="btn btn-primary w-25 fs-3 mx-auto">Save
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    {{--  2--}}
                                    <form class="mb-3" method="POST"
                                          action="{{route(Auth::user()->role.'.update',Auth::user()->id)}}"
                                          enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">Full name</label>
                                                <input id="name" name="name" type="text" autocomplete=""
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       value="{{ Auth::user()->name}}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="job_title" class="form-label">job Title</label>
                                                <input id="job_title" name="job_title" type="text"
                                                       class="form-control @error('job_title') is-invalid @enderror">
                                                @error('job_title')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="resume" class="form-label">Resume</label>
                                                <input id="resume" name="resume" type="file"
                                                       class="form-control @error('resume') is-invalid @enderror">
                                                @error('resume')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="skills" class="form-label">Skills</label>
                                                <input type="text" id="skills" name="skills[]" data-role="tagsinput"
                                                       class="form-control @error('skills') is-invalid @enderror"
                                                       value="{{ old('skills') ? implode(',', old('skills')) : implode(',', $skills ?? []) }}">
                                                @error('skills')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="experience_level" class="form-label">Experience
                                                    Level</label>
                                                <select id="experience_level" name="experience_level"
                                                        class="form-control @error('experience_level') is-invalid @enderror">
                                                    <option value="">Select a Level</option>
                                                    @foreach ([
                                                       'Entry', 'Mid', 'Senior'
                                                    ] as $level)
                                                        <option
                                                            value="{{ $level }}" {{ old('experience_level') == $level ? 'selected' : '' }}>
                                                            {{ $level }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('experience_level')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="experience_time" class="form-label">Location</label>
                                                <select id="experience_time" name="experience_time"
                                                        class="form-control @error('experience_time') is-invalid @enderror">
                                                    <option value="">Select a Time</option>
                                                    @foreach (['1 Year', '2 Year', '3 Year', '4 Year', 'fresh'
                                                        ] as $time)
                                                        <option
                                                            value="{{ $time }}" {{ old('experience_time') == $time ? 'selected' : '' }}>
                                                            {{ $time }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('experience_time')
                                                <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="categories" class="form-label">Categories</label>
                                                <select id="categories" name="categories"
                                                        class="form-control @error('categories') is-invalid @enderror">
                                                    <option value="">Select a category</option>
                                                    @foreach ([
                                                        'Information Technology',
                                                        'Healthcare',
                                                        'Finance',
                                                        'Education',
                                                        'Manufacturing',
                                                        'Retail',
                                                        'Transportation',
                                                        'Hospitality',
                                                        'Construction',
                                                        'Real Estate',
                                                        'Telecommunications',
                                                        'Agriculture',
                                                        'Energy',
                                                        'Entertainment',
                                                        'Legal Services',
                                                        'Marketing and Advertising',
                                                        'Non-Profit',
                                                        'Public Sector',
                                                        'Professional Services',
                                                        'Consulting',
                                                        'Media',
                                                        'Automotive',
                                                        'Pharmaceuticals',
                                                        'Aerospace',
                                                        'Environmental Services',
                                                        'Logistics and Supply Chain',
                                                        'Human Resources',
                                                        'E-commerce',
                                                        'Food and Beverage',
                                                        'Sports and Recreation',
                                                    ] as $category)
                                                        <option
                                                            value="{{ $category }}" {{ old('categories') == $category ? 'selected' : '' }}>
                                                            {{ $category }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('categories')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <select id="location" name="location"
                                                        class="form-control @error('location') is-invalid @enderror">
                                                    <option value="">Select a location</option>
                                                    @foreach ([
                                                        'Cairo', 'Alexandria', 'Giza', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Asyut',
                                                        'Beheira', 'Beni Suef', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Ismailia',
                                                        'Kafr El Sheikh', 'Minya', 'Monufia', 'New Valley', 'Qalyubia', 'Qena', 'Red Sea',
                                                        'Sharqia', 'Sohag', 'South Sinai', 'North Sinai', 'Matrouh'
                                                    ] as $location)
                                                        <option
                                                            value="{{ $location }}" {{ old('location') == $location ? 'selected' : '' }}>
                                                            {{ $location }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('location')
                                                <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 w-100">
                                                <label for="description" class="form-label">
                                                    Description</label>
                                                <textarea id="description" name="description"
                                                          autocomplete=""
                                                          class="form-control @error('description') is-invalid @enderror h-100 mb-4"></textarea>

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center m-5">
                                            <button type="submit" class="btn btn-primary w-25 fs-3 mx-auto">Save
                                            </button>
                                        </div>
                                    </form>

                                @endif
                            </div>
                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-11">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div onclick="toggleSection(1)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-5">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-11">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-6">
                                            <div class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-12">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-7">
                                            <div class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-13">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-11"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-8">
                                            <div class="u-container-layout u-similar-container u-container-layout-15">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-14">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-12"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-9">
                                            <div class="u-container-layout u-similar-container u-container-layout-16">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-15">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}}
                                                    ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-13"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-10">
                                            <div class="u-container-layout u-similar-container u-container-layout-17">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-16">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-14"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#"
                                   class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-9">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-10">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section
            class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-3 hidden"
            id="section3">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">


                            <div class="container my-5">
                                <div class="card mx-auto shadow-sm" style="max-width:100%;max-height: 100% ">
                                    <div class="card-body p-4 mx-auto">
                                        <h1 class="card-title display-6">Change password</h1>
                                        <p class="text-muted">Fill up the form to change the password</p>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form action="{{route('change.Password')}}" method="post" class="my-5">
                                            @method('PUT')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="current_password" class="form-label">Current
                                                    Password</label>
                                                <input id="current_password" name="current_password" type="text"
                                                       class="form-control @error('current_password') is-invalid @enderror"
                                                       placeholder="Enter Current Password">
                                                @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="new_password" class="form-label">New Password </label>
                                                <input id="new_password" name="new_password" type="password"
                                                       class="form-control @error('new_password') is-invalid @enderror"
                                                       placeholder="Enter New Password ">
                                                @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="new_password_confirmation" class="form-label">Confirm
                                                    Password</label>
                                                <input id="new_password_confirmation" name="new_password_confirmation"
                                                       type="password"
                                                       class="form-control @error('confirm_password') is-invalid @enderror"
                                                       placeholder="Enter Confirm Password">
                                            </div>

                                            <button
                                                class="btn btn-primary w-100 d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="me-2" style="width: 24px; height: 24px;">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"/>
                                                </svg>
                                                <span>Change password</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-8">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div onclick="toggleSection(1)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-5">
                                            <div class="u-container-layout u-similar-container u-container-layout-9">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-17">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-6"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-6">
                                            <div class="u-container-layout u-similar-container u-container-layout-10">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-18">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-7"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                    {{--                                                    csc--}}
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-list-item u-radius u-repeater-item u-shape-round u-list-item-7">
                                            <div class="u-container-layout u-similar-container u-container-layout-11">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-19">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-8"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-8">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-20">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-9">
                                            <div class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-21">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}}
                                                    ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-10">
                                            <div class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-22">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-11"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-3">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-4">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-4 hidden"
            id="section4">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">
                            {{-- Delete--}}
                            <div class="container my-5">
                                <div class="card mx-auto shadow-sm" style="max-width:100%;max-height: 100% ">
                                    <div class="card-body p-4 mx-auto">
                                        <h1 class="card-title display-6">Delete Account</h1>
                                        <p class="text-muted">Fill up the form to Delete Account</p>
                                        @if (session('deleted'))
                                            <div class="alert alert-danger">
                                                {{ session('deleted') }}
                                            </div>
                                        @endif

                                        <form action="{{route('delete.profile')}}" method="post" class="my-5">
                                            @method("DELETE")
                                            @csrf
                                            <div class="mb-3">
                                                <label for="current_password" class="form-label">Current
                                                    Password</label>
                                                <input id="current_password" name="current_password" type="text"
                                                       class="form-control @error('current_password') is-invalid @enderror"
                                                       placeholder="Enter Current Password">
                                                @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <button
                                                class="btn btn-danger w-100 d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="me-2" style="width: 24px; height: 24px;">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"/>
                                                </svg>
                                                <span>Delete Account</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-8">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div
                                            class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-5">
                                            <div class="u-container-layout u-similar-container u-container-layout-9">
                                                <h6 onclick="toggleSection(1)" style="cursor: pointer;"
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-17">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-5"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-6">
                                            <div class="u-container-layout u-similar-container u-container-layout-10">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-18">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-6"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-7">
                                            <div class="u-container-layout u-similar-container u-container-layout-11">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-19">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-7"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-list-item u-radius u-repeater-item u-shape-round u-list-item-8">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-20">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-8"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-9">
                                            <div class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-21">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}}
                                                    ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-10">
                                            <div class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-22">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-1">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-2">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section
            class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-5 hidden"
            id="section5">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                {{--                                mostafa--}}
                                @if(Auth::user()->role==='employer')
                                    <div
                                        class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">
                                        <div class="mx-auto w-100" style="max-width: 70%;">
                                            <h1 class="fs-2">Job Post</h1>

                                            <form class="mb-3" method="POST"
                                                  action="{{route('create.job')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="job_title" class="form-label">Job Title</label>
                                                        <input id="job_title" name="job_title" type="text"
                                                               autocomplete="name"
                                                               class="form-control @error('job_title') is-invalid @enderror"
                                                               value="{{ old('job_title') }}">
                                                        @error('job_title')
                                                        <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="salary_range" class="form-label">Salary Range
                                                            $</label>
                                                        <input id="salary_range" name="salary_range" type="number"
                                                               autocomplete=""
                                                               class="form-control @error('salary_range') is-invalid @enderror"
                                                               value="{{ old('salary_range') }}">
                                                        @error('salary_range')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    {{--requirements--}}
                                                    <div class="col-md-6 mb-3">
                                                        <label for="requirements"
                                                               class="form-label">Requirements </label>
                                                        <input type="text" id="requirements" name="requirements[]"
                                                               data-role="tagsinput"
                                                               class="form-control @error('requirements') is-invalid @enderror"
                                                               value="{{ old('requirements') ? implode(',', old('requirements')) : implode(',', $keywords ?? []) }}">
                                                        @error('requirements')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="keywords" class="form-label">Keywords </label>
                                                        <input type="text" id="keywords" name="keywords[]"
                                                               data-role="tagsinput"
                                                               class="form-control @error('keywords') is-invalid @enderror"
                                                               value="{{ old('keywords') ? implode(',', old('keywords')) : implode(',', $keywords ?? []) }}">
                                                        @error('keywords')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="work_type"
                                                               class="form-label">Type</label>
                                                        <select id="work_type" name="work_type"
                                                                class="form-control @error('work_type') is-invalid @enderror">
                                                            <option value="">Select a category</option>
                                                            @foreach ([
                                                               'Full-time', 'Part-time', 'Remote', 'Contract'
                                                            ] as $type)
                                                                <option
                                                                    value="{{ $type }}" {{ old('work_type') == $type ? 'selected' : '' }}>
                                                                    {{ $type }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('work_type')
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="location" class="form-label">Location</label>
                                                        <select id="location" name="location"
                                                                class="form-control @error('location') is-invalid @enderror">
                                                            <option value="">Select a location</option>
                                                            @foreach ([
                                                                'Cairo', 'Alexandria', 'Giza', 'Port Said', 'Suez', 'Luxor', 'Aswan', 'Asyut',
                                                                'Beheira', 'Beni Suef', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Ismailia',
                                                                'Kafr El Sheikh', 'Minya', 'Monufia', 'New Valley', 'Qalyubia', 'Qena', 'Red Sea',
                                                                'Sharqia', 'Sohag', 'South Sinai', 'North Sinai', 'Matrouh'
                                                            ] as $location)
                                                                <option
                                                                    value="{{ $location }}" {{ old('location') == $location ? 'selected' : '' }}>
                                                                    {{ $location }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('location')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="application_deadline" class="form-label">Deadline
                                                        </label>
                                                        <input id="application_deadline" name="application_deadline"
                                                               type="date"
                                                               autocomplete=""
                                                               class="form-control @error('application_deadline') is-invalid @enderror"
                                                               value="{{ old('application_deadline') }}">
                                                        @error('application_deadline')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="job_category" class="form-label">Location</label>
                                                        <select id="job_category" name="job_category"
                                                                class="form-control @error('job_category') is-invalid @enderror">
                                                            <option value="">Select a job category</option>
                                                            @foreach ([
                                                                'Information Technology',
                                                                'Healthcare',
                                                                'Finance',
                                                                'Education',
                                                                'Manufacturing',
                                                                'Retail',
                                                                'Transportation',
                                                                'Hospitality',
                                                                'Construction',
                                                                'Real Estate',
                                                                'Telecommunications',
                                                                'Agriculture',
                                                                'Energy',
                                                                'Entertainment',
                                                                'Legal Services',
                                                                'Marketing and Advertising',
                                                                'Non-Profit',
                                                                'Public Sector',
                                                                'Professional Services',
                                                                'Consulting',
                                                                'Media',
                                                                'Automotive',
                                                                'Pharmaceuticals',
                                                                'Aerospace',
                                                                'Environmental Services',
                                                                'Logistics and Supply Chain',
                                                                'Human Resources',
                                                                'E-commerce',
                                                                'Food and Beverage',
                                                                'Sports and Recreation',
                                                            ] as $category)
                                                                <option
                                                                    value="{{ $category }}" {{ old('job_category') == $category ? 'selected' : '' }}>
                                                                    {{ $category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('job_category')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="experience_level" class="form-label">Experience
                                                            Level</label>
                                                        <select id="experience_level" name="experience_level"
                                                                class="form-control @error('experience_level') is-invalid @enderror">
                                                            <option value="">Select a Level</option>
                                                            @foreach ([
                                                                'Junior', 'Mid', 'Senior', 'Lead'
                                                            ] as $experience_level)
                                                                <option
                                                                    value="{{ $experience_level }}" {{ old('experience_level') == $experience_level ? 'selected' : '' }}>
                                                                    {{ $experience_level }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('experience_level')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3 w-100">
                                                        <label for="job_description" class="form-label">
                                                            Description</label>
                                                        <textarea id="job_description" name="job_description"
                                                                  autocomplete=""
                                                                  class="form-control @error('job_description') is-invalid @enderror h-100 mb-4"></textarea>

                                                        @error('job_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-center m-5">
                                                    <button type="submit" class="btn btn-primary w-25 fs-3 mx-auto">
                                                        Save
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-8">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div onclick="toggleSection(1)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-5">
                                            <div class="u-container-layout u-similar-container u-container-layout-9">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-17">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-5"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-6">
                                            <div class="u-container-layout u-similar-container u-container-layout-10">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-18">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-6"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-7">
                                            <div class="u-container-layout u-similar-container u-container-layout-11">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-19">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-7"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-8">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-20">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-8"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>

                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-list-item u-radius u-repeater-item u-shape-round u-list-item-9">
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-21">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}} ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>

                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-round u-list-item-10">
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-22">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-1">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-2">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-6 hidden"
            id="section6">
            <div
                class="data-layout-selected padding u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-style u-layout-cell u-size-47-md u-size-47-sm u-size-47-xs u-size-49-lg u-size-49-xl u-size-49-xxl u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <div
                                    class="u-container-style u-expanded-width u-group u-hover-feature u-radius u-shape-round u-white u-group-2"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="0">
                                    <div class="u-container-layout u-container-layout-7">
                                        <h4 class="u-align-right u-text u-text-custom-color-7 u-text-default u-text-15">
                                            الباركود </h4>
                                        <div class="rtl u-form u-form-1">
                                            <form action="#"
                                                  class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form"
                                                  source="email" name="form-1" style="padding: 10px;">
                                                <div class="u-form-email u-form-group u-label-none">
                                                    <label for="email-f458" class="u-label">Email</label>
                                                    <input type="email" placeholder="ابحث عن الباركود المطلوب"
                                                           id="email-f458" name="search"
                                                           class="u-input u-input-rectangle u-radius u-input-1"
                                                           required="required">
                                                </div>
                                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                                    <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1"></a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                                    message has been sent.
                                                </div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send your
                                                    message. Please fix errors then try again.
                                                </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                            </form>
                                        </div>
                                        <p
                                            class="u-align-right u-small-text u-text u-text-default u-text-palette-5-dark-1 u-text-variant u-text-16">
                                            تفاصيل ومده جميع الباركود</p>
                                        <div class="u-expanded-width u-table u-table-responsive u-table-1">
                                            <table class="u-table-entity">
                                                <colgroup>
                                                    <col width="25%">
                                                    <col width="25%">
                                                    <col width="25%">
                                                    <col width="25%">
                                                </colgroup>
                                                <thead
                                                    class="u-align-right u-table-header u-text-palette-5-dark-1 u-table-header-1">
                                                <tr style="height: 47px;">
                                                    <th class="u-align-center u-table-cell">الحاله</th>
                                                    <th class="u-align-center u-table-cell">الخصم</th>
                                                    <th class="u-align-center u-table-cell">المده</th>
                                                    <th class="u-table-cell">الكود</th>
                                                </tr>
                                                </thead>
                                                <tbody style=" cursor: pointer;"
                                                       class="u-align-right u-table-body u-text-palette-5-dark-2 u-table-body-1">
                                                <!-- changee -->
                                                <tr style="height: 61px;" onclick="togglecode2()">
                                                    <td class="u-align-center u-table-cell u-table-cell-5">ساري</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-6">10%</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-7">3 W</td>
                                                    <td class="u-table-cell u-table-cell-8">45DSGSV4</td>
                                                </tr>
                                                <tr style="height: 61px;">
                                                    <td class="u-align-center u-table-cell u-table-cell-9">منتهي</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-10">6%</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-11">10 D</td>
                                                    <td class="u-table-cell">843FGFS71</td>
                                                </tr>
                                                <tr style="height: 61px;">
                                                    <td class="u-align-center u-table-cell u-table-cell-13"> منتهي</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-14">15%</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-15">1 M</td>
                                                    <td class="u-table-cell">456RGF6UJ</td>
                                                </tr>
                                                <tr style="height: 61px;">
                                                    <td class="u-align-center u-table-cell u-table-cell-17">ساري</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-18">21%</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-19">12 D</td>
                                                    <td class="u-table-cell">SDFY6HD6</td>
                                                </tr>
                                                <tr style="height: 61px;">
                                                    <td class="u-align-center u-table-cell u-table-cell-21">ساري</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-22">50%</td>
                                                    <td class="u-align-center u-table-cell u-table-cell-23">1 Y</td>
                                                    <td class="u-table-cell">F5SDG5HG</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="#"
                                           class="u-align-center u-border-0 u-btn u-button-style u-hover-feature u-hover-white u-white u-btn-2"><span
                                                class="u-icon u-icon-5"><svg class="u-svg-content"
                                                                             viewBox="0 0 30.727 30.727" x="0px" y="0px"
                                                                             style="width: 1em; height: 1em;">
                                                <path
                                                    d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0   l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z">
                                                </path>
                                            </svg></span>&nbsp;المزيد
                                        </a>
                                        <a onclick="togglecode1()"
                                           class="u-align-center u-border-2 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-hover-feature u-none u-radius u-btn-2">
                                            اضافة</a>
                                    </div>
                                </div>
                                <div class="rtl u-align-center u-form u-form-checks-spacing-0 u-form-2 hidden"
                                     id="formcode1">
                                    <form action="#" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                          source="email" name="form" style="padding: 10px;">
                                        <div class="u-form-group u-label-top">
                                            <label for="email-3793" class="u-label u-label-2">الباركود</label>
                                            <input type="text" placeholder="ادخل الرقم المتسلسل" id="email-3793"
                                                   name="Cover"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-form-group u-label-top u-form-group-4">
                                            <label for="text-3d8a" class="u-label u-label-3">المده</label>
                                            <input type="text" placeholder="ادخل مدة فعالية الباركود" id="text-3d8a"
                                                   name="Email"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-form-group u-label-top u-form-group-5">
                                            <label for="text-a438" class="u-label u-label-4">الخصم</label>
                                            <input type="text" placeholder="ادخل حجم الخصم للباركود" id="text-a438"
                                                   name="sale"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-align-left u-form-group u-form-submit u-label-top">
                                            <a href="#"
                                               class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius u-btn-3">اضافة</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                    </form>
                                </div>
                                <!-- addd -->
                                <div class="rtl u-align-center u-form u-form-checks-spacing-0 u-form-3 hidden"
                                     id="formcode2">
                                    <form action="#" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                          source="email" name="form" style="padding: 10px;">
                                        <p class="u-form-group u-form-text u-text u-text-17"> الكود : 45fdsfsdv3</p>
                                        <p class="u-form-group u-form-text u-text u-text-18">المده : 3W </p>
                                        <p class="u-form-group u-form-text u-text u-text-19"> الخصم : 10%</p>
                                        <p class="u-form-group u-form-text u-text u-text-20"> الحاله : ساري</p>
                                        <div class="u-form-group u-label-top">
                                            <label class="u-label u-label-5">الباركود</label>
                                            <input type="text" placeholder="ادخل الرقم المتسلسل" id="email-3793"
                                                   name="Cover"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-form-group u-label-top u-form-group-12">
                                            <label class="u-label u-label-6">المده</label>
                                            <input type="text" placeholder="ادخل مدة فعالية الباركود" id="text-3d8a"
                                                   name="Email"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-form-group u-label-top u-form-group-13">
                                            <label class="u-label u-label-7">الخصم</label>
                                            <input type="text" placeholder="ادخل حجم الخصم للباركود" id="text-a438"
                                                   name="sale"
                                                   class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                        </div>
                                        <div class="u-align-left u-form-group u-form-submit u-label-top">
                                            <a href="#"
                                               class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius u-btn-6">اضافة</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                    </form>
                                </div>
                                <!-- addd -->
                            </div>
                        </div>
                        <div
                            class="u-container-style u-gradient u-layout-cell u-radius u-shape-round u-size-11-lg u-size-11-xl u-size-11-xxl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-8">
                                <div class="u-expanded-width u-list u-list-2">
                                    <div class="u-repeater u-repeater-2">
                                        <div onclick="toggleSection(1)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-5"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-9">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-17">
                                                    {{ Auth::user()->role === 'admin' ? 'Admin Dashboard' : 'User Dashboard' }}
                                                    &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-6"><img
                                                            src="{{ Storage::url('images/4725672-bf8ca48a.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(2)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-6"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-10">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-18">
                                                    Edit Profile&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-7"><img
                                                            src="{{ Storage::url('images/879757-c80d89ad.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(3)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-7"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-11">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-19">
                                                    Change Password &nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-8"><img
                                                            src="{{ Storage::url('images/3126647-37e670d1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(4)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-8"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-12">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-20">
                                                    Delete Profile​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-9"><img
                                                            src="{{ Storage::url('images/2611701-5bf827d3.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(5)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-9"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-13">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-21">
                                                    {{Auth::user()->role==='employer'?"job post" :"my applied"}}
                                                    ​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-10"><img
                                                            src="{{ Storage::url('images/3650317-11f1865c.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div onclick="toggleSection(6)" style="cursor: pointer;"
                                             class="u-container-align-right u-container-style u-custom-color-3 u-custom-item u-hover-feature u-list-item u-radius u-repeater-item u-shape-rectangle u-list-item-10"
                                             data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                             data-animation-direction="">
                                            <div class="u-container-layout u-similar-container u-container-layout-14">
                                                <h6
                                                    class="u-align-right u-text u-text-body-alt-color u-text-default u-text-22">
                                                    باركود​&nbsp;<span
                                                        class="u-file-icon u-icon u-text-white u-icon-11"><img
                                                            src="{{ Storage::url('images/3867237-82c8a9c1.png') }}"
                                                            alt=""></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-4">الصفحة
                                    الرئيسية </a>
                                <a href="#"
                                   class="u-align-center u-border-2 u-border-hover-custom-color-3 u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-3 u-hover-feature u-none u-radius u-btn-5">تواصل
                                    مع المطور </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>

@endsection
<script src="{{ asset('js/toggleSection.js') }}"></script>

