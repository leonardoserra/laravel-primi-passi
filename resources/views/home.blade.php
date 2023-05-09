<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage Primi Passi Laravel</title>
</head>
<body>
    <header>

        <nav>
            <ul>
                <li>
                    <a href="{{route('home')}}">Home</a>    
                </li>
                
                <li>
                <a href="{{route('about')}}">Chi Siamo</a> 
                </li>
            </ul>
        </nav>


    </header>

    <main>
        <h1>Hello World</h1>

        <h2>Dati Anagrafici: </h2>
        <ul>
            @foreach ($dati as $dato)
                <li>{{$dato}}</li>
            @endforeach    
        </ul>

    </main>

</body>
</html>