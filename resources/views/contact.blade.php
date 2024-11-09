@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="contact-container">
        <div class="contact-header">
            <h1>Get in Touch</h1>
            <p>Feel free to reach out for collaborations or just a friendly hello</p>
        </div>

        <div class="contact-card">
            <form action="#" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                        required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject"
                        required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>

    <style>
        .contact-container {
            max-width: 800px;
            margin: 6rem auto 2rem;
            padding: 0 1.5rem;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            color: #4f46e5;
            margin-bottom: 0.5rem;
        }

        .contact-header p {
            color: #6b7280;
            font-size: 1.1rem;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #4338ca;
            transform: translateY(-1px);
        }

        /* Dark mode styles */
        [data-bs-theme="dark"] .contact-card {
            background: white;
        }

        [data-bs-theme="dark"] .form-group label {
            color: #374151;
        }

        [data-bs-theme="dark"] .form-control {
            background: white;
            color: #000;
            border-color: #e5e7eb;
        }

        [data-bs-theme="dark"] .form-control:focus {
            border-color: #4f46e5;
        }

        @media (max-width: 768px) {
            .contact-card {
                padding: 1.5rem;
            }

            .contact-header h1 {
                font-size: 2rem;
            }
        }
    </style>
@endsection
