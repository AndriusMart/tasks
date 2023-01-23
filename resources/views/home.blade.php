<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasks</title>
</head>

<body>
    <div>
        <p>task nr.1 with lib</p>
        <pre>{{ print_r($table, true) }}</pre>
    </div>
    <div>
        <h2>task nr.2</h2>
        <h3>{{$rez1}}</h3>
        <h3>{{$rez2}}</h3>
        <h3>{{$rez3}}</h3>
    </div>
</body>

</html>