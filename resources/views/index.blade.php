<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>

<body>
    <h1>This is a Home page</h1>
    <nav>
        <ul>
            <li><a href="<?php echo route('home') ?>">Home</a></li>
            <li><a href="<?php echo route('about.page') ?>">About</a></li>
        </ul>
    </nav>
</body>

</html>
