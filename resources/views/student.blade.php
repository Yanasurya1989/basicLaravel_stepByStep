@extends('layout.mainLayout')

{{-- section yang hanya satu baris tidak membutuhkan endsection --}}
@section('title', 'Home') 

@section('content_wae')
  
<h1>Halaman Student</h1>
{{-- <h3>{{$satudentList}}</h3> --}}
<h3>Studen List : </h3>
<ol>
    @foreach ($satudentList as $data)
        <li>{{$data->name}} | {{$data->gender}} | {{$data->nis}}</li>
    @endforeach    
</ol>  
@endsection