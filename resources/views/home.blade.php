@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
    <div class="team-grid">
        <div class="row g-4">
            @foreach (['amir', 'moin', 'maged', 'ahmed'] as $personaType)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="social-links">
                                <a href="{{ $personas[$personaType]['social']['linkedin'] }}" target="_blank" title="LinkedIn">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="{{ $personas[$personaType]['social']['github'] }}" target="_blank" title="GitHub">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>

                        <div class="profile-image-wrapper">
                            <img src="{{ $personas[$personaType]['image'] }}" alt="{{ $personas[$personaType]['name'] }}"
                                class="profile-image">
                        </div>

                        <div class="profile-content">
                            <h2 class="profile-name">{{ $personas[$personaType]['name'] }}</h2>
                            <p class="profile-title">{{ $personas[$personaType]['title'] }}</p>

                            <div class="rating">
                                @for ($i = 0; $i < $personas[$personaType]['rating']; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                                @for ($i = $personas[$personaType]['rating']; $i < 5; $i++)
                                    <i class="bi bi-star"></i>
                                @endfor
                            </div>

                            <div class="btn-group">
                                <a href="{{ route('about', $personaType) }}" class="btn-action btn-about">About Me</a>
                                <a href="{{ route('contact', $personaType) }}" class="btn-action btn-hire">Hire Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
