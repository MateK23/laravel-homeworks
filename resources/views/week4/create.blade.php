<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('storeposts') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="title">
            <textarea class="form-control" name="description"></textarea>
            <button class="btn btn-primary w-100">save</button>
        </form>
    </div>
</body>
</html>
