<!DOCTYPE html>
<html>
<head>
    <title>Simple Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Messages</h2>
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Write a message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <h3>Stored Messages</h3>
        <ul>
            @foreach ($messages as $message)
                <li>{{ $message->content }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

