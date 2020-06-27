@extends('layouts.master')
@section('content')
<div id="form">
        <div class="container">
        @include('partials.error')
           <form action="{{ route('createmessage') }}" method="POST">
           {{ csrf_field() }}
              <div class="input">
                <input type="text" name="firstname" placeholder="Adınız" @if(!empty($firstname)) value="{{ $firstname }}" @else value="" @endif>
              </div>
              <div class="input">
                <input type="text" name="lastname" placeholder="Soyadınız" @if(!empty($lastname)) value="{{ $lastname }}" @else value="" @endif> 
              </div>
              <div class="input">
                <input type="text" name="email" placeholder="Email" @if(!empty($email)) value="{{ $email }}" @else value="" @endif> 
              </div>
              <div class="input">
                <input type="text" name="Text" placeholder="Mesajınız"> 
              </div>
              <button type="submit">Gönder</button>
           </form>
        </div>
    </div>
@endsection