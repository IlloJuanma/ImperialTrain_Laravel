<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mite mimashou</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Densha</h2>

        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Name:</strong> {{ $train->name }}</p>
                <p class="card-text"><strong>Passengers:</strong> {{ $train->passengers }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $train->year }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $train->train_type->type }}</p>
            </div>
        </div>

        <a href="{{ route('trains.index') }}" class="btn btn-primary mt-3">Volver</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
