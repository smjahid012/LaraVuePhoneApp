<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Phone Book App</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <Myheader></Myheader>
            <div class="container">
                <router-view></router-view>
            </div>
        <Myfooter></Myfooter>
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>