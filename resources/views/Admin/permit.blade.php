@extends('admin.layouts.master')
@section('admincontent')
<table class="tablo">
  <tr>
    <th>İd</th>
    <th>Adı</th>
    <th>Soyadı</th>
    <th>Email</th>
    <th>Mevcut İzin</th>
    <th>İzin</th>
    <th></th>
  </tr>  
  @foreach($users as $user) 
  <tr> 
  <form method="POST" action="{{ route('admin.editPermit', $user->id) }}">
     {{ csrf_field() }}
    <td > {{ $user->id}} </td>
    <td > {{ $user->firstname}} </td>
    <td > {{ $user->lastname}} </td>
    <td > {{ $user->email}} </td>
    <td >
        @if($user->role_id == 1) Admin 
        @elseif($user->role_id == 2) Üye
        @elseif($user->role_id == 3) Misafir
        @endif
    </td>
    <td >
        <select id="select" name="roleid" class="form-control" style=" margin-right: -30px">
            <option selected disabled>İzin Seçiniz</option>
            <option value="1">Admin</option>
            <option value="2">Üye</option>
            <option value="3">Misafir</option>
        </select>
    </td>
    <td>
        <input  type="submit" class="buton" value="Düzenle">
    </td>   
    
  </tr>
  </form>
  @endforeach 
</table>
@endsection