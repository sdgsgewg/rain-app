<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="rain-box">
            {{-- Using JS to generate rain --}}
        </div>
        <div class="box">
            <h1>My First Laravel Project</h1>
            <h2>Hello Everyone</h2>
        </div>
    </div>

    <script src="{{ secure_asset('js/script.js') }}"></script>
</body>

</html>
