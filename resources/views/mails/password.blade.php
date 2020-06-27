<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="{{ url('css/registerpanel.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <title>Ömer Resul ERTAN</title>
  </head>
  <body>
    <div id="box">
        <img src="{{ url('img/logo.jpg') }}">
        @include('partials.error')
        <form method="POST" action="">
         {{ csrf_field() }}
            <div id="satır">    
               
                <p for="email" >E-mail</p>
                <input type="email" class="input" name="email" >
               
                <button type="submit">Gönder</button>
            </div>   
        </form>
    </div>
      

    
  </body>
</html>