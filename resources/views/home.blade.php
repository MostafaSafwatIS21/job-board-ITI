@extends('layouts.app')

@section('title')
    Home Page
@endsection
@section('content')
    <style>
        .fullscreen-image {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .fullscreen-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cover the entire screen while maintaining aspect ratio */
            z-index: -1;
            /* Ensure the image is behind the text */
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            font-size: 2rem;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background for better text visibility */
            border-radius: 10px;
            z-index: 1;
            /* Ensure the text is above the image */
        }

        .custom-gutter {
            --bs-gutter-x: 0rem;
            --bs-gutter-y: 0rem;
        }
    </style>



    <section>
        <div class="container min-vw-100 custom-gutter ">
            <div class="fullscreen-image">
                <img src="{{ Storage::url('images/' . 'scott-graham-5fNmWej4tAA-unsplash.jpg') }}" alt="Image"
                     class="img-fluid">
            </div>
            <div class="overlay-text">
                <h1>Find Your Job Now!</h1>

            </div>

        </div>
    </section>

    <section>
        <div class="container mx-auto  my-xxl-5 text-center w-25 mb-5">
            <h1>Recommended Jobs</h1>
            <p class="text-center pt-3">Ready for a change or eager to showcase your skills?
                Explore your perfect career path through our thoughtfully curated list of recommended jobs.</p>
        </div>

        <div class="nav_tabs">
            <ul class="nav justify-content-center nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact"
                            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                </div>
            </div>
        </div>
        <div class="container w-75 mx-auto py-4">
            <div class="row">
                <!-- First Card -->
                <div class="col-md-6 mb-4">
                    <div class="card p-2 shadow-sm hover-shadow-lg">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 ">
                    <div class="card p-2">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 col-md-2 shadow-none p-3 mb-5 bg-light rounded">
                                <a href="#">
                                    <img src="{{ Storage::url('images/' . 'defalute-icons.png') }}" alt="Job Icon"
                                         class="img-fluid rounded-start w-75">
                                </a>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Automotive Windscreen Fitters (Tinters)</h5>
                                    <div
                                        class="meta d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <div class="job d-flex align-items-center mb-2 mb-md-0">
                                            <i class="bi bi-briefcase me-2"></i>
                                            <h6 class="card-subtitle mb-0">Accounting / Finance</h6>
                                        </div>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi bi-geo-alt me-2"></i>
                                            <h6 class="card-subtitle mb-0">Australia</h6>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info fs-6">Full time</button>
                                </div>
                            </div>
                            <div class="col-2 text-end pe-4">
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-bookmark h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mx-auto  my-xxl-5 text-center w-25 mb-5">
            <button type="button" class="btn btn-warning">More Jobs</button>
        </div>
    </section>

@endsection
