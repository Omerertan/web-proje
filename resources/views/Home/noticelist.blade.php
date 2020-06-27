@extends('layouts.master')
@section('content')
<section id="duyurular">
    <div class="container">
      <div><strong>Tüm Duyurular</strong></div>
      <ul>
      @foreach($notices as $notice)
        <li class="duyuru">
          <a >{{$notice->text}}</a>
        </li>
      @endforeach  
        
      </ul>
    </div>
  </section>
@endsection