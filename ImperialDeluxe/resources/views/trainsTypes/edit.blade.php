<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ressha no shurui o henshū suru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            padding: 20px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            margin-top: 15px;
            display: block;
            font-weight: bold;
        }

        input {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-back {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center">Edit Train Type</h2>

        <form action="{{ route('trainsTypes.update', ['trainsType' => $trainTypes->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}

            <label for="type">Type:</label>
            <input type="text" class="form-control" name="type" value="{{ $trainTypes->type }}">

            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('trainsTypes.index') }}" class="btn btn-back">Atrás</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
