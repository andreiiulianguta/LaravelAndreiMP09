<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #007bff;
            color: white;
        }

        header .navbar-brand {
            font-weight: bold;
        }

        header .navbar-nav .nav-link {
            color: white !important;
        }

        header .navbar-nav .nav-link:hover {
            color: #e9ecef !important;
        }

        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .hero-section .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .hero-section .btn-primary:hover {
            background-color: #004494;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel Tinkering Andrei</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('films.index') }}">Films</a>
                        <a class="nav-link" href="{{ route('films.index') }}">Coches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('films.create') }}">Add Film</a>
                        <a class="nav-link" href="{{ route('films.create') }}">Add Coche</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="hero-section">
    <div class="container">
        <h1>Laravel Andrei</h1>
        <a href="{{ route('films.index') }}" class="btn btn-primary">View Films</a>
        <a href="{{ route('films.index') }}" class="btn btn-primary">View Coches</a>

    </div>
</div>


<footer>
    <p>&copy; 2024 Film Management. All rights reserved.</p>
    <p>Andrei Iulian Guta</p>
</footer>

</body>
</html>
