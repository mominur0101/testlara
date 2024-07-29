<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}" data-pjax>Home</a></li>
            <li><a href="{{ route('about') }}" data-pjax>About</a></li>
            <li><a href="{{ route('contact') }}" data-pjax>Contact</a></li>
        </ul>
    </nav>

</body>

</html>
