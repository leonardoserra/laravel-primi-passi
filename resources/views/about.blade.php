<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi Siamo</title>
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

        <h1>lo staff</h1>
        <ul>
            @foreach ($staff as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
        </main>
    </body>

</html>