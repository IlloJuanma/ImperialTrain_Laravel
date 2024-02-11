<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiketto o sakusei shimashou!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        h2 {
            color: #007bff;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-top: 10px;
            display: block;
        }

        select, input {
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Create a new ticket</h2>

        <form action="{{ route('tickets.store') }}" method="post">
            @csrf
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}" required>
        </div>

            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price">

        <div class="form-group">
            <label for="train_type">Train type:</label>
            <select class="form-control" name="train_type">
                @foreach($trains as $train)
                <option value="{{ $train-> id }}">{{ $train-> name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ticket_type">Ticket type:</label>
            <select class="form-control" name="ticket_type">
                @foreach($ticket_types as $ticket_type)
                <option value="{{ $ticket_type-> id }}">{{ $ticket_type->type }}</option>
                @endforeach
            </select>
        </div>

            <br> 
            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Atrás</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
