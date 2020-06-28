@extends('admin.layouts.master')
@section('admincontent')

<div class="container">
    <h3 > Duyuru Ekle  </h3>
    <div class="form">
        <form method="POST" action="{{ route('admin.createNotice') }}" >
            {{ csrf_field() }}
            <textarea  name="Text"></textarea>
            <input class="buton" type="submit"  value="Ekle">
        </form>
    </div>
</div>

@endsection