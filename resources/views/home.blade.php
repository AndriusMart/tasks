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
        <p>task nr.2</p>
        <p>{{$rez1}}</p>
        <p>{{$rez2}}</p>
        <p>{{$rez3}}</p>
    </div>
</body>

</html>