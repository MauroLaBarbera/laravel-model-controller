<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
       <section>
           <div class="container">
               <h1>MOVIES</h1>
               <div class="cards">
                   
                   <ul>
                       @foreach ($movies as $movie)
                           <li>
                               <h2>{{ $movie->title }}</h2>
                               <h3>{{ $movie->original_title }}</h3>
                               <h4>Vote: {{ $movie->vote }} </h4>
                           </li>
                       @endforeach
                   </ul>
               </div>
           </div>
       </section>
    </body>
</html>
