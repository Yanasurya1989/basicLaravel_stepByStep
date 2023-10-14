@extends('layout.mainLayout')

{{-- section yang hanya satu baris tidak membutuhkan endsection --}}
@section('title', 'Home') 

@section('content_wae')
  
<h1>Halaman Student</h1>
{{-- <h3>{{$satudentList}}</h3> --}}
<h3>Class List : </h3>
{{-- {{$rombonganBelajar}} --}}
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rombonganBelajar as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection