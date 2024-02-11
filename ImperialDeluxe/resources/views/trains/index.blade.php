<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teikoku ressha</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Kōshitsu tetsudō no ketteihan risuto</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Passengers</th>
                    <th>Year</th>
                    <th>Train Type</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <td>{{ $train->name }}</td>
                    <td>{{ $train->passengers }}</td>
                    <td>{{ $train->year }}</td>
                    <td>{{ $train->train_type->type }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('trains.show', ['train' => $train->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('trains.edit', ['train' => $train->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('trains.destroy', ['train' => $train->id]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>     
        <hr>
        <div>
            <p>Atarashī ressha o sakusei shite mimasen ka? Fowādo!</p>
            <p>Create!!</p>
            <a href="{{ route('trains.create') }}" class="btn btn-success">Create Train</a>
            <a href="{{ route('tickets.create') }}" class="btn btn-success">Create Ticket</a>
            <a href="{{ route('ticketTypes.create') }}" class="btn btn-success">Create Ticket Type</a>
            <a href="{{ route('trainsTypes.create') }}" class="btn btn-success">Create Train Type</a>
        </div>
        <hr>
        <div>
            <p>Show!!</p>
            <a href="{{ route('tickets.index') }}" class="btn btn-success">Show Tickets</a>
            <a href="{{ route('ticketTypes.index') }}" class="btn btn-success">Show TypeTickets</a> 
            <a href="{{ route('trainsTypes.index') }}" class="btn btn-success">Show TypeTrains</a> 
        </div>
        <hr>      
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
