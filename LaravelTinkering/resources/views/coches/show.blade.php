<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coches Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        header {
            margin-bottom: 3rem;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }

        h1, h2 {
            color: #4a90e2;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        .card {
            margin-top: 1.5rem;
        }

        .btn-primary {
            background-color: #5cb85c;
            border: none;
        }

        .btn-primary:hover {
            background-color: #4cae4c;
        }

        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">coches Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('coches.index') }}">coches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('coches.create') }}">Add coches</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>coches Details</h1>
            <div class="card">
                <div class="card-header">
                    <h2>{{ $coches->marca }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>modelo:</strong> {{ $coches->modelo }}</p>
                    <p><strong>año:</strong> {{ $coches->año }}</p>
                    <p><strong>combustible:</strong> {{ $coches->combustible }}</p>
                    <p><strong>precio:</strong> {{ $coches->precio }}</p>


                    <a href="{{ route('coches.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 coches Management. All rights reserved.</p>
    <p>Andrei Iulian Guta</p>
</footer>

</body>
</html>
