@extends('layouts.app')

@section('title')
    Candidates
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/job-post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script class="u-script" src="{{ asset('js/JQuery.js') }}"></script>
    <script class="u-script" src="{{ asset('js/bootstrap.js') }}"></script>

    <style>
        {{--        @dd($candidates)--}}
    </style>
    <div class="u-active-body-alt-color  u-xxl-mode" data-lang="en">
        <section class="u-clearfix u-container-align-center u-grey-10 u-section-1" id="sec-e1a8">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <h3 class="u-align-center u-text u-text-default u-text-1">Find employer </h3>
                <p class="u-align-center u-text u-text-default u-text-2">
                    <a href="/"
                       class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-grey-40 u-btn-1">Home&nbsp;
                    </a>/​​&nbsp; Candidates
                </p>
            </div>
        </section>
        <section class="u-clearfix u-section-2 container-lg" id="sec-3906">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div
                                class="u-container-style u-layout-cell u-size-16 u-layout-cell-1 bg-light w-100 mb-5 p-3">
                                <div class="u-container-layout u-container-layout-1">
                                    <div class="u-expanded-width u-form u-form-1 mb-5">
                                        <form action="${{ route('candidates.show') }}" method="GET" id="search-form"
                                              class="u-clearfix u-form-spacing-10  u-inner-form"
                                              source="email" name="form-1" style="padding: 10px;">
                                            <p class="u-form-group u-form-text u-text u-text-1"> Search by Keywords </p>
                                            <div class="input-group">
                                                <input type="text" name="Search" class="form-control rounded"
                                                       id="search-input"
                                                       placeholder="Search">
                                                <button type="submit" class="btn btn-outline-primary">Search</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="custom-expanded u-form u-form-2">
                                        <form action="${{ route('candidates.show') }}" method="GET" id="location-form"
                                              class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                              source="email" name="form-1" style="padding: 10px;">
                                            <p class="u-form-group u-form-text u-text u-text-2"> Location</p>
                                            <div class="u-form-group u-form-select u-label-none u-form-group-8">
                                                <label for="select-6b7c" class="u-label">Dropdown</label>
                                                <div class="u-form-select-wrapper">
                                                    <select id="location" name="location"
                                                            class="form-control">
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
                                                </div>
                                            </div>
                                            <div
                                                class="u-align-left u-form-group u-form-submit u-label-none u-form-group-6">
                                                <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2"></a>
                                                <input type="submit" value="submit" class="u-form-control-hidden">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="custom-expanded u-form u-form-3">
                                        <form action="${{ route('candidates.show') }}" method="GET" id="category-form"
                                              class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                              source="email" name="form-1" style="padding: 10px;">
                                            <p class="u-form-group u-form-text u-text u-text-3"> Category</p>
                                            <div class="u-form-group u-form-select u-label-none u-form-group-8">
                                                <label for="select-6b7c" class="u-label">Dropdown</label>
                                                <div class="u-form-select-wrapper">
                                                    <select id="categories" name="categories"
                                                            class="form-control ">
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

                                                </div>
                                            </div>
                                            <div
                                                class="u-align-left u-form-group u-form-submit u-label-none u-form-group-9">
                                                <a href="#" class="u-btn u-btn-submit u-button-style u-btn-3"></a>
                                                <input type="submit" value="submit" class="u-form-control-hidden">
                                            </div>

                                        </form>
                                    </div>

                                    <a href="{{route("employers.show")}}"
                                       class="u-border-2 u-border-hover-palette-3-base u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-white u-palette-3-base u-radius u-text-body-alt-color u-btn-8">
                                        Clear All Filters</a>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        // Function to automatically submit forms when a selection is made
                                        function autoSubmitOnChange(formId, selectId) {
                                            const form = document.getElementById(formId);
                                            const select = document.getElementById(selectId);
                                            if (form && select) {
                                                select.addEventListener('change', function () {
                                                    form.submit();
                                                });
                                            }
                                        }

                                        // Apply to specific forms and selects
                                        autoSubmitOnChange('location-form', 'location');
                                        autoSubmitOnChange('category-form', 'categories');
                                        autoSubmitOnChange('experience-form', 'experience_level');
                                        autoSubmitOnChange('date-posted-form', 'date_posted');

                                        // Function to automatically submit search form when input is changed
                                        function autoSubmitOnInput(formId, inputId) {
                                            const form = document.getElementById(formId);
                                            const input = document.getElementById(inputId);
                                            if (form && input) {
                                                input.addEventListener('input', function () {
                                                    form.submit();
                                                });
                                            }
                                        }

                                        // Apply to the search form and input

                                        document.addEventListener('DOMContentLoaded', function () {
                                            function autoSubmitOnInput(formId, inputId) {
                                                console.log("hi")
                                                const form = document.getElementById(formId);
                                                const input = document.getElementById(inputId);
                                                if (form && input) {
                                                    input.addEventListener('input', function () {
                                                        form.submit();
                                                    });
                                                }
                                            }

                                            autoSubmitOnInput('search-form', 'search-input');
                                        });


                                    });
                                </script>


                                <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-2">
                                        <p class="u-text u-text-default u-text-10">Showing 1 – 10

                                            of {{ $candidates->total() > 0 ? $candidates->total() : 0 }}
                                            results </p>
                                        <div class="u-form u-form-10">
                                            <form action="${{ route('candidates.show') }}" method="GET"
                                                  class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form"
                                                  source="email" name="form" style="padding: 10px;">
                                                <div class="u-form-group u-form-select u-label-none u-form-group-31">
                                                    <label for="select-1bb1" class="u-label">Dropdown</label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-1bb1" name="select"
                                                                class="u-border-none u-input u-input-rectangle u-text-grey-40 u-input-7">
                                                            <option value="Sort by default" data-calc="">Sort by default
                                                            </option>
                                                            <option value="Newest" data-calc="Newest">Newest</option>
                                                            <option value="Oldest" data-calc="Oldest">Oldest</option>
                                                            <option data-calc="All" value="All">All</option>
                                                        </select>
                                                        <svg class="u-caret u-caret-svg u-text-grey-40" version="1.1"
                                                             id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             width="16px" height="16px" viewBox="0 0 16 16"
                                                             style="fill:currentColor;" xml:space="preserve">
                                                    <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                                </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                                    <a href="#" class="u-btn u-btn-submit u-button-style u-btn-12"></a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>

                                            </form>
                                        </div>
                                        <div class="u-form u-form-11">
                                            <form action="${{ route('candidates.show') }}" method="GET"
                                                  class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form"
                                                  source="email" name="form" style="padding: 10px;">
                                                <div class="u-form-group u-form-select u-label-none u-form-group-33">
                                                    <label for="select-1bb1" class="u-label">Dropdown</label>
                                                    <div class="u-form-select-wrapper">
                                                        <select id="select-1bb1" name="select"
                                                                class="u-border-none u-input u-input-rectangle u-text-grey-40 u-input-8">
                                                            <option value="9 per Page" data-calc="9 per Page">9 per Page
                                                            </option>
                                                            <option value="18 per Page" data-calc="18 per Page">18 per
                                                                Page
                                                            </option>
                                                            <option value="36 per Page" data-calc="36 per Page"
                                                                    selected="selected">36 per Page
                                                            </option>
                                                            <option data-calc="72 per Page" value="72 per Page">72 per
                                                                Page
                                                            </option>
                                                        </select>
                                                        <svg class="u-caret u-caret-svg u-text-grey-40" version="1.1"
                                                             id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             width="16px" height="16px" viewBox="0 0 16 16"
                                                             style="fill:currentColor;" xml:space="preserve">
                                                    <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                                </svg>
                                                    </div>
                                                </div>
                                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                                    <a href="#" class="u-btn u-btn-submit u-button-style u-btn-13"></a>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>

                                            </form>
                                        </div>

                                        <div class="u-align-left u-expanded-width u-list u-list-1">
                                            <div class="u-repeater u-repeater-1 row">
                                                @if(count($candidates)>0)
                                                    @foreach($candidates as $candidate)
                                                        <div
                                                            class="u-container-style u-list-item u-repeater-item mb-5">
                                                            <div
                                                                class="u-container-layout u-similar-container u-valign-middle u-container-layout-3 align-items-center justify-content-center">
                                                                <img
                                                                    class="u-align-left u-image u-image-default u-image-1 img-fluid "
                                                                    style="width: 80px"
                                                                    src="{{ Storage::url($candidate->user->avatar) }}"
                                                                    alt=""
                                                                    data-image-width="140"
                                                                    data-image-height="auto">
                                                                <div
                                                                    class="u-clearfix u-group-elements u-group-elements-1 align-items-center justify-content-center">

                                                                    <a href="{{route('employer.details',$candidate->id)}}"
                                                                       class="text-black u-border-hover-grey-15">
                                                                        <h6 class="u-text u-text-default u-text-11"> {{$candidate->user->name}}
                                                                            &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp;
                                                                            &nbsp;
                                                                            &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp;&nbsp;</h6>
                                                                    </a>

                                                                </div>
                                                                <a href="{{route('employer.details',$candidate->id)}}"
                                                                   class="u-border-none u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-3-base u-radius u-text-hover-white u-text-palette-3-base u-white u-btn-14">
                                                                    View Profile</a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div
                                                        class="u-container-style u-list-item u-repeater-item mb-5">
                                                        <h1>No Data Found</h1>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


    </div>
@endsection
