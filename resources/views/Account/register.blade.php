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
        <form method="POST" action="{{route('account.registersave')}}">
         {{ csrf_field() }}
            <div id="satır">    
                <p for="firstname">Ad</p>
                <input type="text" class="input" name="firstname" >

                <p for="lastname">Soyad</p>
                <input type="text" class="input" name="lastname" >

                <p for="birthday" >Doğum Tarihi</p>
                <input type="text" class="input" name="birthday">

                <p for="email" >E-mail</p>
                <input type="email" class="input" name="email" value="{{ old('email') }}">

                <p for="password" >Şifre</p>
                <input type="password" class="input" name="password">

                <p for="password" >Şifre Tekrarı</p>
                <input type="password" class="input" name="password_confirmation">

                <select id="select" name="roleid" class="form-control" style="margin-top:20px; padding: 7px; width: 200px">
                    <option selected disabled>İzin Seçiniz</option>
                    <option value="2">Üye</option>
                    <option value="3">Misafir</option>
                </select>
                <button type="submit">Kaydet</button>
            </div>   
        </form>
    </div>
      

    
  </body>
</html>