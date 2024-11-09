@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="about-container">
        <div class="about-header">
            <div class="profile-intro">
                <img src="{{ $data['image'] }}" alt="{{ $data['name'] }}" class="about-image">
                <div class="intro-content">
                    <h1>{{ $data['name'] }}</h1>
                    <p class="title">{{ $data['title'] }}</p>

                </div>
            </div>
        </div>

        <div class="about-content">
            <div class="about-section">
                <h2>About Me</h2>
                <p>{{ $data['about'] }}</p>
            </div>

            <div class="skills-section">
                <h2>Skills & Expertise</h2>
                <div class="skills-grid">
                    @foreach ($data['skills'] ?? [] as $skill)
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>{{ $skill['name'] }}</span>
                                <span>{{ $skill['level'] }}%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="experience-section">
                <h2>Experience</h2>
                <div class="timeline">
                    @foreach ($data['experience'] ?? [] as $exp)
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h3>{{ $exp['position'] }}</h3>
                                <p class="company">{{ $exp['company'] }}</p>
                                <p class="period">{{ $exp['period'] }}</p>
                                <ul class="experience-list">
                                    @foreach ($exp['description'] as $bullet)
                                        <li>{{ $bullet }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="education-section">
                <h2>Education</h2>
                <div class="education-grid">
                    @foreach ($data['education'] ?? [] as $edu)
                        <div class="education-item">
                            <h3>{{ $edu['degree'] }}</h3>
                            <p class="school">{{ $edu['school'] }}</p>
                            <p class="year">{{ $edu['year'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        .about-container {
            max-width: 1000px;
            margin: 6rem auto 2rem;
            padding: 0 1.5rem;
            text-align: justify;
        }

        .about-header {
            background: linear-gradient(145deg, #6366f1, #8b5cf6);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            color: white;
        }

        .profile-intro {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .about-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
        }

        .intro-content h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .title {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
            opacity: 0.8;
            transition: opacity 0.2s ease;
        }

        .social-links a:hover {
            opacity: 1;
        }

        .about-section,
        .skills-section,
        .experience-section,
        .education-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 1rem;
            color: #000;
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 1rem;
        }

        .timeline-dot {
            position: absolute;
            left: -2rem;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background-color: #6366f1;
        }

        .timeline-content {
            padding-left: 2rem;
        }

        .timeline-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .timeline-content p {
            margin-bottom: 0.5rem;
        }

        .education-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .education-item {
            background: white;
            border-radius: 15px;
            padding: 1rem;
            flex: 1 1 calc(33.33% - 1rem);
        }

        .education-item h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .education-item p {
            margin-bottom: 0.5rem;
        }

        .skill-item {
            background: white;
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .skill-info span:first-child {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .skill-info span:last-child {
            font-size: 1rem;
            opacity: 0.8;
        }

        .progress-bar {
            height: 1rem;
            border-radius: 10px;
            background-color: #f3f4f6;
        }

        .progress {
            height: 1rem;
            border-radius: 10px;
            background-color: #6366f1;
        }

        .experience-list {
            list-style-type: disc;
            padding-left: 1.2rem;
            margin-top: 0.5rem;
        }

        .experience-list li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
            color: #666;
        }

        [data-bs-theme="dark"] .experience-list li {
            color: #aaa;
        }

        .intro-content {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .intro-content h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .title {
            font-size: 1.2rem;
            color: white;
            margin: 0;
            opacity: 0.9;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
            opacity: 0.8;
            transition: opacity 0.2s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            opacity: 1;
        }

        /* Dark mode adjustments */
        [data-bs-theme="dark"] .about-section,
        [data-bs-theme="dark"] .skills-section,
        [data-bs-theme="dark"] .experience-section,
        [data-bs-theme="dark"] .education-section {
            background: white;
            color: #000;
        }

        [data-bs-theme="dark"] .about-section h2,
        [data-bs-theme="dark"] .skills-section h2,
        [data-bs-theme="dark"] .experience-section h2,
        [data-bs-theme="dark"] .education-section h2 {
            color: #000;
        }

        [data-bs-theme="dark"] .experience-list li {
            color: #666;
        }

        [data-bs-theme="dark"] .timeline-content h3 {
            color: #000;
        }

        [data-bs-theme="dark"] .timeline-content .company,
        [data-bs-theme="dark"] .timeline-content .period {
            color: #666;
        }

        [data-bs-theme="dark"] .skill-info span {
            color: #000;
        }

        [data-bs-theme="dark"] .progress-bar {
            background: #f3f4f6;
        }
    </style>
@endsection
