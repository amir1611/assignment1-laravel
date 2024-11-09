<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['name'] }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            /* Light mode variables */
            --bg-primary: #f8f9fa;
            --bg-card: #ffffff;
            --text-primary: #212529;
            --text-secondary: #6c757d;
            --border-color: #dee2e6;
            --shadow-color: rgba(0, 0, 0, 0.08);
            --btn-bg: #f8f9fa;
            --btn-hover: #e9ecef;
            --card-hover: rgba(0, 0, 0, 0.05);
            --rating-color: #ffc107;
            --social-hover: #0d6efd;
            --card-gradient: linear-gradient(145deg, #6366f1, #8b5cf6);
            --card-bg: #ffffff;
            --card-dark-bg: #1a1a1a;
            --hover-shadow: rgba(99, 102, 241, 0.3);
        }

        [data-bs-theme="dark"] {
            /* Dark mode variables */
            --bg-primary: #111827;
            --bg-card: #1f2937;
            --text-primary: #f9fafb;
            --text-secondary: #d1d5db;
            --border-color: #374151;
            --shadow-color: rgba(0, 0, 0, 0.25);
            --btn-bg: #374151;
            --btn-hover: #4b5563;
            --card-hover: rgba(255, 255, 255, 0.05);
            --rating-color: #fbbf24;
            --social-hover: #60a5fa;
        }

        body {
            background: #f1f5f9;
            min-height: 100vh;
            padding: 2rem 1rem;
            transition: background-color 0.3s ease;
        }

        [data-bs-theme="dark"] body {
            background: #0f172a;
        }

        .team-grid {
            max-width: 1400px;
            margin: 0 auto;
        }

        .profile-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        [data-bs-theme="dark"] .profile-card {
            background: var(--card-dark-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px var(--hover-shadow);
        }

        .profile-header {
            background: var(--card-gradient);
            padding: 2rem 1.5rem 5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .social-links {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            gap: 0.75rem;
        }

        .social-links a {
            color: white;
            font-size: 1.1rem;
            opacity: 0.8;
            transition: all 0.2s ease;
        }

        .social-links a:hover {
            opacity: 1;
            transform: translateY(-2px);
        }

        .profile-image-wrapper {
            position: relative;
            margin-top: -4rem;
            padding: 0 1.5rem;
        }

        .profile-image {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 5px solid var(--card-bg);
            object-fit: cover;
            margin: 0 auto;
            display: block;
            position: relative;
            z-index: 1;
        }

        [data-bs-theme="dark"] .profile-image {
            border-color: var(--card-dark-bg);
        }

        .profile-content {
            padding: 1.5rem;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .profile-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1rem 0 0.5rem;
            background: var(--card-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        [data-bs-theme="dark"] .profile-name {
            color: white;
            -webkit-text-fill-color: white;
        }

        .profile-title {
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 16px;
        }

        .rating {
            color: var(--rating-color);
            margin-bottom: 24px;
        }

        .rating i {
            margin: 0 2px;
        }

        .btn-group {
            margin-top: auto;
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            padding: 1rem 1.5rem 1.5rem;
        }

        .btn-about, .btn-hire {
            padding: 0.5rem 1rem;
            text-align: center;
            color: white;            
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            min-width: 90px;
            border: none;
            transition: opacity 0.2s ease;
        }

        .btn-about {
            background: #4776E6;
        }

        .btn-hire {
            background: #8E54E9;
        }

        .btn-about:hover, .btn-hire:hover {
            opacity: 0.9;
            color: white;
        }

        @media (max-width: 768px) {
            .btn-about, .btn-hire {
                min-width: 85px;
                padding: 0.45rem 0.9rem;
            }
        }

        /* Theme toggle button */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 2px 10px var(--shadow-color);
        }

        .theme-toggle:hover {
            transform: rotate(45deg);
        }

        @media (max-width: 768px) {
            .profile-card {
                margin-bottom: 20px;
            }
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        [data-bs-theme="dark"] .navbar {
            background: rgba(17, 24, 39, 0.95);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            background: linear-gradient(45deg, #4776E6, #8E54E9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding: 0.5rem 0;
        }

        .nav-link {
            color: #4b5563;
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        [data-bs-theme="dark"] .nav-link {
            color: #e5e7eb;
        }

        .nav-link:hover {
            background: rgba(71, 118, 230, 0.1);
            color: #4776E6;
            transform: translateY(-1px);
        }

        .nav-link.active {
            background: linear-gradient(45deg, #4776E6, #8E54E9);
            color: white;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Modern hamburger menu */
        .navbar-toggler-icon {
            background-image: none;
            position: relative;
            width: 24px;
            height: 24px;
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            left: 0;
            width: 24px;
            height: 2px;
            background: #4776E6;
            transition: all 0.3s ease;
        }

        .navbar-toggler-icon::before {
            top: 8px;
        }

        .navbar-toggler-icon::after {
            bottom: 8px;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 11px;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            bottom: 11px;
        }

        /* Theme Toggle Button & Tooltip */
        .theme-toggle-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .theme-toggle {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .theme-tooltip {
            position: absolute;
            right: 50px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.85rem;
            white-space: nowrap;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .theme-toggle-wrapper:hover .theme-tooltip {
            opacity: 1;
        }

        /* Initial CTA Animation */
        .theme-cta {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background: linear-gradient(45deg, #4776E6, #8E54E9);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            animation: fadeInOut 5s ease-in-out;
            pointer-events: none;
            z-index: 1000;
        }

        @keyframes fadeInOut {
            0% { opacity: 0; transform: translateY(20px); }
            20% { opacity: 1; transform: translateY(0); }
            80% { opacity: 1; transform: translateY(0); }
            100% { opacity: 0; transform: translateY(-20px); }
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            border: none;
        }

        /* Light mode styles */
        [data-bs-theme="light"] .theme-toggle {
            background: #1a1a1a;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .theme-toggle:hover {
            transform: scale(1.1);
        }

        .theme-toggle i {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="border-radius: 60px">
        <div class="container">
            <a class="navbar-brand" href="/">InnovateX</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
     
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="theme-toggle-wrapper">
        <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
            <i class="bi bi-sun-fill"></i>
        </button>
        <span class="theme-tooltip">Toggle light/dark mode</span>
    </div>

    <!-- Initial CTA - will disappear after 5 seconds -->
    <div class="theme-cta" id="themeCta">
        ✨ Try switching themes!
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const currentTheme = html.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            const icon = document.querySelector('.theme-toggle i');
            
            html.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update icon
            icon.className = newTheme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
        }

        // Remove CTA after it fades out
        setTimeout(() => {
            const cta = document.getElementById('themeCta');
            if (cta) cta.remove();
        }, 5000);

        // Set initial theme and icon
        const savedTheme = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
        document.querySelector('.theme-toggle i').className = 
            savedTheme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
    </script>
</body>
</html>
