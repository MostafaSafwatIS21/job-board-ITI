@extends('layouts.app')

@section("title")
    View Employer
@endsection

@section("content")
    <style>
        body,
        html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: white;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
        }

        .button {
            background-color: #ffd700;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .main-content {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }

        .job-details {
            flex: 2;
        }

        .sidebar {
            flex: 1;
        }

        .job-header {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .job-logo {
            width: 60px;
            height: 60px;
            background-color: transparent;
            border-radius: 50%;
            overflow: hidden;
        }

        .job-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .job-title {
            font-size: 24px;
            margin: 0;
        }

        .job-meta {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .tag {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
        }

        .full-time {
            background-color: #90ee90;
            color: #006400;
        }

        .urgent {
            background-color: #ffd700;
            color: #8b4513;
        }

        .section {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .photos img {
            max-width: 100%;
            border-radius: 8px;
        }

        .related-job {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .related-job:last-child {
            border-bottom: none;
        }

        .job-overview-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .job-overview-item i {
            margin-right: 10px;
            color: #ffd700;
        }

    </style>

    <main class="container main-content">
        <div class="job-details">
            <div class="job-header">
                <div>
                    <div class="job-logo">
                        <img src="{{ Storage::url($employer->company_logo) }}">
                    </div>
                    <h1 class="job-title">{{ $employer->company_name }}</h1>
                    <div class="job-meta">
                        <span>📍 {{ $employer->location }}</span>
                        <span>🕒 Founded: {{ $employer->created_at->format('F j, Y') }}</span>
                    </div>
                </div>
                @if(Auth::user()->role === "candidate")
                    @if($apply)
                        <a href="{{ route('cancel.apply', $apply->id) }}" class="btn btn-danger">Cancel</a>
                    @else
                        <a href="{{ route('apply.post', $post->id) }}" class="btn btn-warning">Apply Now</a>
                    @endif
                @endif
            </div>

            <section class="section">
                <h2>Company Description</h2>
                <p>
                <h5>
                    {{ $employer->company_description }}
                </h5>
                </p>
            </section>
        </div>

        <div class="sidebar">
            <section class="section">
                <h2>Company Overview</h2>
                <div class="job-overview-item">
                    <i>📅</i>
                    <div>
                        <strong>Founded</strong>
                        <p>{{ $employer->created_at->format('F j, Y') }}</p>
                    </div>
                </div>
                <div class="job-overview-item">
                    <i>📍</i>
                    <div>
                        <strong>Location</strong>
                        <p>{{ $employer->location }}</p>
                    </div>
                </div>
                <div class="job-overview-item">
                    <i>🌐</i>
                    <div>
                        <strong>Website</strong>
                        <p><a href="{{ $employer->company_website }}"
                              target="_blank">{{ $employer->company_website }}</a></p>
                    </div>
                </div>
            </section>

            <section class="section">
                <div style="display: flex; align-items: center; margin-bottom: 15px">
                    <div class="job-logo" style="margin-right: 15px"></div>
                    <div>
                        <h3>Contact</h3>
                        <p><strong>Email:</strong> {{ $employer->company_email }}</p>
                    </div>
                </div>
                <p><strong>Categories:</strong> {{ $employer->categories }}</p>
            </section>
        </div>
    </main>

@endsection
