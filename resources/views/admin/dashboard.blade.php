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
                            <h1>Dashboard</h1>

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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
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
                                                    Job Posts​&nbsp;<span
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
                                          action=""
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
                                    <form class="mb-3" method="POST"
                                          action="{{route("admin.update")}}"
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
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input id="phone" name="phone" type="text"
                                                       placeholder="{{ Auth::user()->phone}}"
                                                       class="form-control @error('phone') is-invalid @enderror">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="avatar" class="form-label">Avatar</label>
                                                <input id="avatar" name="avatar" type="file"
                                                       class="form-control @error('avatar') is-invalid @enderror">
                                                @error('avatar')
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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
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
                                                    Job Posts​&nbsp;<span
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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
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
                                                    Job Posts​&nbsp;<span
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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
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
                                                    Job Posts​&nbsp;<span
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
                                {{--                                users--}}


                                <div
                                    class="table-responsive shadow-lg rounded    u-hover-feature  u-shape-round u-white u-group-2 animated customAnimationIn-played"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="0"
                                    style="will-change: transform, opacity; animation-duration: 1000ms;">
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <!-- Dropdown -->
                                        <div class="dropdown mb-3 mb-md-0">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                                     height="12" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                                </svg>
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last day</a></li>
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last month</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>

                                        <!-- Search Bar -->
                                        <div class="position-relative">
                                            <input type="search" class="form-control ps-5"
                                                   placeholder="Search for items" id="table-search">
                                            <svg class="position-absolute top-50 start-0 translate-middle-y ms-3"
                                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Table -->
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col">
                                                id
                                            </th>
                                            <th scope="col">User name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--                                        --}}
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}"</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>
                                                <td>{{$user->phone}}</td>

                                                <td>
                                                    <div class="btn-group dropend">
                                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                            Dropend
                                                        </button>

                                                        <ul class="dropdown-menu ">
                                                            <form action="{{route("employer.details",$user->id)}}"
                                                                  method="get">
                                                                @csrf
                                                                <li>
                                                                    <button class="dropdown-item "
                                                                            href="">Review
                                                                    </button>
                                                            </form>

                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                   href="{{route("set.admin",$user->id)}}">{{$user->role==='admin'? "Remove Admin" : "Set Admin" }}</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                   href="{{route("delete.user",$user->id)}}">Delete
                                                                    User</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-9">
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
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-10">
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
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-11">
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
                                            <div
                                                class="u-container-layout u-similar-container u-container-layout-12">
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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
                                                    ​&nbsp;<span
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
                                                    Job Posts​&nbsp;<span
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
                                    class="table-responsive shadow-lg rounded    u-hover-feature  u-shape-round u-white u-group-2 animated customAnimationIn-played"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="0"
                                    style="will-change: transform, opacity; animation-duration: 1000ms;">
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <!-- Dropdown -->
                                        <div class="dropdown mb-3 mb-md-0">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                                     height="12" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                                </svg>
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last day</a></li>
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last month</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>

                                        <!-- Search Bar -->
                                        <div class="position-relative">
                                            <input type="search" class="form-control ps-5"
                                                   placeholder="Search for items" id="table-search">
                                            <svg class="position-absolute top-50 start-0 translate-middle-y ms-3"
                                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Table -->
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col">
                                                id
                                            </th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">location</th>
                                            <th scope="col">Work Type</th>
                                            <th scope="col">Salary range</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Post Creator</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Settings</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--                                        --}}
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td>{{$post->job_title}}</td>
                                                <td>{{$post->location}}"</td>
                                                <td>{{$post->work_type}}</td>
                                                <td>{{$post->salary_range}}$</td>
                                                <td>{{$post->job_category}}</td>
                                                <td>{{$post->user->company_name}}</td>
                                                <td>{{$post->status}}</td>

                                                <td>
                                                    <div class="btn-group dropend">
                                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                            Dropend
                                                        </button>

                                                        <ul class="dropdown-menu ">
                                                            @if($post->status==="pending")
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                       href="{{route("status.reject",$post->id)}}">
                                                                        Rejected
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                       href="{{route("status.approve",$post->id)}}">
                                                                        Approve
                                                                    </a>
                                                                </li>
                                                            @elseif($post->status==="approved")
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                       href="{{route("status.reject",$post->id)}}">
                                                                        Rejected
                                                                    </a>
                                                                </li>FUs
                                                            @elseif($post->status==="rejected")
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                       href="{{route("status.approve",$post->id)}}">
                                                                        Approve
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="{{route("job.details",$post->id)}}">view
                                                                    post</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="{{route("delete.post",$post->id)}}">Delete
                                                                    post</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
                                                    {{Auth::user()->role==='employer'?"job post" :"Users"}}
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
                                                    Job Posts​&nbsp;<span
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

