<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiketto no henshū</title>
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
            max-width: 600px;
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

        select, input {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center">Edit Ticket</h2>

        <form action="{{ route('tickets.update', ['ticket' => $tickets->id]) }}" method="post">
            @csrf
            {{ method_field('PUT')}}
            
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" value="{{ date('Y-m-d')}}" required>

            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" value="{{ $tickets->price }}">

            <label for="train_type">Train type:</label>
            <select class="form-control" name="train_type">
                <option value="{{ $tickets->ticket_train->id }}" selected>{{ $tickets->ticket_train->name }}</option>
                @foreach($trains as $train)
                    <option value="{{ $train->id }}">{{ $train->name }}</option>
                @endforeach
            </select>

            <label for="ticket_type">Ticket type:</label>
            <select class="form-control" name="ticket_type">
                @foreach($ticket_types as $ticket_type)
                    <option value="{{ $ticket_type->id }}">{{ $ticket_type->type }}</option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn btn-success">Edit</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Atrás</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
