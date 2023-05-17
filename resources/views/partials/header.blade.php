<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Title here' }}</title>
    <style>
        body {
            background-color: #666;
            min-height: 100vh;
            padding: 48px 8px 24px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin: 0;
        }

        header {
            background-color: #666;
            padding: 12px 2px;
        }
    </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <header>
        <a href="#">
            <h1>Student System</h1>
        </a>
    </header>
