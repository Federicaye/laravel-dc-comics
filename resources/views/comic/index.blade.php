<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div>{{$comic->title}}</div>
        <img src="{{$comic->thumb}}" class="o" alt="">

 

    @endforeach
    <div class="y">ciao</div>
</body>

</html>