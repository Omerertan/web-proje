@extends('admin.layouts.master')
@section('admincontent')
<table class="tablo">
  <tr>
    <th>Adı</th>
    <th>Soyadı</th>
    <th>Email</th>
    <th>Mesaj</th>
  </tr>  
  @foreach($messages as $message)  
  <tr> 
    <td >{{ $message->firstname }}</td>
    <td > {{ $message->lastname }} </td>
    <td > {{ $message->email }} </td>
    <td > {{ $message->text }} </td>
  </tr>
  @endforeach

</table>
@endsection