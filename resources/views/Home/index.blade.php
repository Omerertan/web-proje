@extends('layouts.master')
@section('content')

<!-- Slider https://www.youtube.com/watch?v=pGHOaY4dhAA -->
<div id="slider">
    <figure>
      <img src="{{ url('img/slide1.jpg') }}" />
      <img src="{{ url('img/slide2.jpg') }}" />
      <img src="{{ url('img/slide3.jpg') }}" />
      <img src="{{ url('img/slide4.jpg') }}" />
    </figure>
  </div>

  <section id="haberler">
    <div class="container">
      <div><strong>Haberler</strong></div>

        <div class="haber">
          <p>
            <a href="https://uxplanet.org/30-things-we-often-forget-when-designing-mobile-apps-ae30cc3b2c6b">
              Mobil Uygulamalar Tasarlarken Sıklıkla Unuttuğumuz 30 Şey
            </a>
          </p>

          <p>
              <a href="https://uxplanet.org/dos-and-don-ts-of-web-design-8c9d6a5de7c6">
                Web Tasarım Yapılması ve Yapılmaması Gerekenler
              </a>
          </p>

          <p>
              <a href="https://uxplanet.org/functional-minimalism-for-web-design-4290722cddbd">
                Web Tasarımında İşlevsel Minimalizm
              </a>
          </p>

          <p>
              <a href="https://uxplanet.org/8-tips-for-dark-theme-design-8dfc2f8f7ab6">
                Karanlık Tema Tasarım 8 İpuçları
              </a>
          </p>

          <p>
              <a href="https://uxdesign.cc/ux-trends-for-2020-looking-at-the-big-picture-ebb8870838b">
                2020 için UX trendleri: büyük resme bakmak
              </a>
          </p>

        </div>

        <div class="haber">
          <img src="{{ url('img/glass.jpg') }}" />
        </div>
    </div>
  </section>

  <section id="duyurular">
    <div class="container">
      <div><strong>Duyurular</strong></div>
      <ul>
        @foreach($notices as $notice)
        <li class="duyuru">
          <a >{{ $notice->text }}</a>
        </li>
        @endforeach        
        @if( Auth::user()->role_id != 3 )
          <li class="duyuru"  >
          <a href=" {{ route('noticelist') }}" style="color: #F34236; text-decoration: underline;">
            Geçmiş Duyurular 
          </a>
        </li>       
        @endif
      </ul>
    </div>
  </section>

@endsection