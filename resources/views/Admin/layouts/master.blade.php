<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">  
    <title>Admin Panel</title>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <img src="{{ url('img/menu.png') }}" id="sidebar_btn">
        </label>
        <div class="left_area">
            <img src="{{ url('img/logo.jpg') }}" alt="">
        </div>
        <div class="right-area">
            <a href="{{ route('admin.logout') }}" class="logout_btn">Çıkış Yap</a>
        </div>
    </header>
    <div class="sidebar">
        <div>
           
        </div>
        <a href="{{ route('admin.notice') }}"><span>Duyuru Ekle</span></a>
        <a href="{{ route('admin.permit') }}"><span>İzin Değiştir</span></a>
        <a href="{{ route('admin.message') }}"><span>İletişim Sayfası</span></a>
    </div>
    <div class="content">
        @yield('admincontent')
    </div>
</body>
</html>