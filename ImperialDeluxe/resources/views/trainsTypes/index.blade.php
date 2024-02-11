<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ressha no shurui</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        h2 {
            color: #28a745;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #28a745;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #e8f5e9;
        }

        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Watashitachi no ressha ga nandearu ka shiritaidesu ka? Subarashī...</h2>

        <table class="table table-bordered table-hover">
            <caption class="text-success">Ressha no shurui</caption>
            <thead class="thead-success">
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($trainsTypes as $trainType)
                <tr>
                    <td>{{$trainType->type}}</td>
                    <td>
                        <a href="{{ route('trainsTypes.show', ['trainsType' => $trainType-> id])}}" class="btn btn-warning">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('trainsTypes.edit', ['trainsType' => $trainType->id])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('trainsTypes.destroy', ['trainsType' => $trainType->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('trainsTypes.create') }}" class="btn btn-secondary">Create new TrainType</a>
        <a href="{{ route('trains.index') }}" class="btn btn-secondary">Atrás</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
