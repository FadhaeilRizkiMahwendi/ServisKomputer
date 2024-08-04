<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #000;
            /* Changed to black */
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5;
            z-index: -1;
            animation: fadeIn 1s ease-in-out forwards;
        }

        .content {
            text-align: center;
            position: relative;
            z-index: 1;
            max-width: 600px;
            padding: 20px;
            animation: slideIn 1s ease-in-out forwards;
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            white-space: nowrap;
            overflow: hidden;
            border-right: 0.15em solid white;
            animation: typing 6s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #007bff;
            /* Blue button background */
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
            margin: 5px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            /* Darker shade for hover effect */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 0.5;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: white;
            }
        }

        @media (max-width: 768px) {
            .content {
                max-width: 90%;
                padding: 10px;
            }

            .content h1 {
                font-size: 2.5rem;
            }

            .content p {
                font-size: 1rem;
            }

            .btn-custom {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container">
            <a class="navbar-brand" href="#">Servis Komputer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="assets/images/background-image.jpg" alt="Background Image" class="background-image">
    <div class="content">
        <h1>Welcome to Our Website!!!</h1>
        <p>Explore our features and get started with your journey today. Join us and discover new opportunities.</p>
        <div>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-custom">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="btn btn-custom">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-custom">
                Register
            </a>
            @endif
            @endauth
            @endif
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>