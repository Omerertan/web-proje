<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/LoginPanel.css') }}">
    <title>Ömer Resul ERTAN</title>
  </head>
  <body >
      <div class="col-sm-3 " id="box">
          <img src="{{ url('img/logo.jpg') }}" style="margin-bottom: 10px;">
          @include('partials.error')
          <div class="box-form">
            <form method="POST" action="{{route('account.createlogin')}}">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputEmail1" name="email">Email</label>
                <input type="email" class="form-control " name="email" value="{{Cookie::get('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" required>             
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" name="password">Şifre</label>
                <input type="password" class="form-control " name="password" value="{{Cookie::get('password')}}" id="exampleInputPassword1" >
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" {{ Cookie::get('remember') ? 'checked' : '' }}  name="rememberme">
                <label class="form-check-label" for="exampleCheck1"  name="rememberme" >Beni Hatırla</label>
              </div>
              <button type="submit" class="btn btn-danger text-white btn-block">Giriş Yap</button>
              <div style="margin-top: 10px;">
                <div>
                     <a href="{{ route('account.repassword')}}" style="float: right; "> Şifremi Unuttum</a>
                </div>
                <a href="{{ route('account.register')}}" style="float: left;"> Kayıt ol</a>
              </div>
            </form>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>