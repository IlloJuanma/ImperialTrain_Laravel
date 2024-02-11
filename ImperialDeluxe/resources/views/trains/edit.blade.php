<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Henshū</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Ressha no henshū</h2>

        <form action="{{ route('trains.update', ['train' => $trains->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $trains->name }}">
            </div>
            <div class="form-group">
                <label for="passengers">Passengers:</label>
                <input type="number" class="form-control" name="passengers" value="{{ $trains->passengers }}">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" name="year" value="{{ $trains->year }}">
            </div>
            <div class="form-group">
                <label for="train_type">Type:</label>
                <select class="form-control" name="train_type">
                    <option value="{{ $trains->train_type->id }}" selected hidden>{{ $trains->train_type->type }}</option>
                    @foreach($train_types as $train_type)
                        <option value="{{ $train_type->id }}">{{ $train_type->type }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('trains.index') }}" class="btn btn-secondary">Atrás</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
