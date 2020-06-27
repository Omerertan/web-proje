<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
  <link rel="stylesheet" href="{{ url('css/hakkında.css') }}">
  <link rel="stylesheet" href="{{ url('css/iletisim.css') }}">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sulphur+Point:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">

  <title>Ömer Resul Ertan</title>
</head>

<body>
  <header>
    <div class="container">

      <div id="logo">
        <a href="{{route('home')}}">
          <img src="{{ url('img/logo.jpg') }}" />
        </a>
      </div>

      <div id="menu">
        <ul>
          <li class="basliklar">
            <a href="{{route('about')}}" class="baslik">
              hakkımda
            </a>
          </li>
          <li class="basliklar">
            <a href="{{route('project')}}" class="baslik">
              projeler
            </a>
          </li>
          <li class="basliklar">
            <a href="{{route('article')}}" class="baslik">
              Makaleler
            </a>
          </li>
          @if( Auth::user()->role_id != 3 )
          <li class="basliklar">
            <a href="{{route('contact')}}" class="baslik">
              iletişim
            </a>
          </li>
          @endif
          @auth
          <li class="basliklar">
            <a href="#" class="baslik" id="logout_btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
              Çıkış Yap
            </a>
            <form id="logout-form" action="{{ route('account.logout') }}" method="POST" style="display:none;">
            {{ csrf_field() }}
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </header>
    @yield("content") 
  <footer>
    <div class="container">
      <div id="iletisim">

        <div class="iletisim-kutu">
          <h2>Adres</h2>
          <p>Üsküdar/İstanbul</p>
        </div>
        <div class="iletisim-kutu">
          <h2>Email</h2>
          <p>omerresulertan1034@gmail.com</p>
        </div>
        <div class="iletisim-kutu">
          <h2>Telefon</h2>
          <p>0544 260 00 00 </p>
        </div>

      </div>
      <div id="iconlar">
        <a href="https://tr.linkedin.com/"><i class="fab fa-linkedin fa-3x"></i></a>
        <a href="https://github.com/"><i class="fab fa-github-square fa-3x"></i></a>
        <a href="https://github.com/"><i class="fab fa-medium fa-3x"></i></a>
      </div>
      <a href="#logo" id="up"><i class="fas fa-long-arrow-alt-up fa-lg"></i></a>
      <p>Design by Ömer Resul Ertan © 2019. Tüm hakları Saklıdır.</p>
    </div>
  </footer>
</body>

</html>