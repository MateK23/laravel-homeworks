<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="{{ route('testpostroute') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <button>Submit</button>
    </form>
</body>
</html>
