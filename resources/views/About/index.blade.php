@extends('layouts.master')
@section('content')

<div id="hakkımda">
      <div class="container">
        <p>
          Merhaba 17 Nisan 1995 üsküdar doğdum aslen Balıkesirliyim. 
          İlkokulu Atatürk İlköğretim okulunda bitirdikten sonra
          Beykoz Şehit Ömer Halisdemir Anadolu Teknik Lisesi Bilişim
          Teknoloji Bölümü Veri Tabanı dalından mezun oldum. 2017 üniversite
          tercihinde Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği kazandım
          ve şuan 3.sınıf öğrencisi olarak devam etmekteyim.  
        </p>
        <!-- https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_video_all -->
        <div id="video">
          <video aligne="center" width="500" height="280" controls>
            <source src="{{ url('img/video') }}" type="/images/video/mp4">
        </video>
        </div>
      </div>
    </div>

    <div id="ozgecmis">
      <div class="container">
          <h1>CV</h1>
          <h3>Web Tasarım Uzmanı | Üsküdar/İstanbul | omerresulertan@gmail.com</h3>
          <h4>Eğitim</h4>
            <ul>
              <li>Beykoz Şehit Ömer Halisdemir Anadolu Teknik Lisesi / Bilişim Teknolojileri Bölümü</li>
              <li>Kocaeli Üniversitesi /Bilişim Sistemleri Mühendisliği</li>
            </ul>
          <h4>Programlama Dilleri</h4>
            <ul>
            <li>Html</li>
            <li>Css</li>
            <li>Asp .Net MVC</li>
            <li>Asp .Net Core</li>
            <li>Laravel Framework</li>
            </ul>
          <h4>Deneyim</h4>
            <ul>
              <li>Üsküdar Belediyesi / Bilgi İşlem Müdürlüğü</li>
            </ul>
            
           <h4>Kişisel ve Diğer Bilgiler</h4>  
           <ul>
              <li>Yabancı Diller: İngilizce </li>
              <li>Sürücü Ehliyeti: B </li>
            </ul>
           <button>
              <a href="Cv.pdf" download>
                 Cv indir</a>
            </button>
            
      </div>
    </div>


@endsection