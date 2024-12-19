<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit coches</title>
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

        h1 {
            color: #4a90e2;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            border-radius: 5px;
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
            <h1>Edit coches</h1>
            <form action="{{ route('coches.update', $coches->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Marca</label>
                    <input type="text" marca="marca" class="form-control" value="{{ $coches->marca }}" required>
                </div>
                <div class="form-group">
                    <label for="modelo">modelo</label>
                    <input type="text" name="modelo" class="form-control" value="{{ $coches->modelo }}" required>
                </div>
                <div class="form-group">
                    <label for="año">año</label>
                    <input type="number" name="año" class="form-control" value="{{ $coches->año }}" required>
                </div>
                <div>
                <div class="form-group">
                    <label for="combustible">combustible</label>
                    <input type="text" combustible="combustible" class="form-control" value="{{ $coches->combustible }}" required>
                </div>
                    <div class="form-group">
                        <label for="precio">precio</label>
                        <input type="number" precio="precio" class="form-control" value="{{ $coches->precio }}" required>
                    </div>
                <button type="submit" class="btn btn-primary">Update coches</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 coches Management. All rights reserved.</p>
    <p>Andrei Iulian Guta</p>
</footer>

</body>
</html>
