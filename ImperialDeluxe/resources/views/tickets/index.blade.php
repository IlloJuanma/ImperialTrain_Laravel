<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inperiaruchiketto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        h2 {
            color: #007bff;
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
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Watashitachi no chiketto wa subarashīdesu!</h2>

        <table class="table table-bordered table-hover">
            <caption>Inperiaruchiketto</caption>
            <thead class="thead-dark">
                <tr>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Train</th>
                    <th>Type</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->date }}</td>
                    <td>{{ $ticket->price }} ¥</td>
                    <td>{{ $ticket->ticket_train->name }}</td>
                    <td>{{ $ticket->ticket_type->type }}</td>
                    <td>
                        <a href="{{ route('tickets.show', ['ticket' => $ticket-> id]) }}" class="btn btn-info">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('tickets.create') }}" class="btn btn-success">Create Ticket</a>
        <hr>
        <a href="{{ route('trains.index') }}" class="btn btn-secondary">Atrás</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
