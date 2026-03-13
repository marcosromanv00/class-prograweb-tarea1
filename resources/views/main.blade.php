<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Main</h1>
        <nav>
            <a href="{{ route('main') }}">Home</a>
            <a href="{{ route('books') }}">Books</a>
            <a href="{{ route('authors') }}">Authors</a>
            <a href="{{ route('publishers') }}">Publishers</a>
        </nav>

        <div class="field">
            <label for="main_input">Texto</label>
            <input type="text" id="main_input" name="main_input" placeholder="Write something ...">
        </div>
    </div>
</body>
</html>