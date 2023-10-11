@extends('layout.mainLayout')

{{-- section yang hanya satu baris tidak membutuhkan endsection --}}
@section('title', 'Home') 

@section('content_wae')
  <h1>Hello, world!</h1>
  <h3>Welcome {{ $name }}, kamu login sebagai {{ $role }}</h3>

  <table class="table">
    <tr>
      <th>No</th>
      <th>Name</th>
    </tr>
    @foreach ($fruit as $data)
      <tr>
        {{-- <td>{{ $loop->index }}</td> --}}
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data }}</td>
      </tr>
    @endforeach
  </table>
  
@endsection



{{-- @if ($role != 'superAdmin') --}}
  {{-- @if ($role == 'admin')
    <a href="#">ke halaman admin</a>
    @elseif ($role == 'staff')
    <a href="#">ke halaman rumah</a>
    @else
    <a href="#">ke halaman belakang</a>
  @endif --}}

  {{-- @switch($role)
    @case($role == 'admin')
      <a href="#">ke halaman admin</a>
      @break

    @case($role == 'staff')
      <a href="#">ke halaman contact</a>
      @break

    @default
      <a href="#">ke halaman dapur</a>
      @break
      
  @endswitch --}}

  {{-- @for ($i = 0; $i < 5; $i++)
    {{$i}} <br>
  @endfor --}}

  {{-- @foreach ($fruit as $data)
      {{$data}} <br>
  @endforeach --}}