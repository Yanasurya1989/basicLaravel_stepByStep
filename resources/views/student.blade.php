@extends('layout.mainLayout')

{{-- section yang hanya satu baris tidak membutuhkan endsection --}}
@section('title', 'Home') 

@section('content_wae')
  
<h1>Halaman Student</h1>
{{-- <h3>{{$satudentList}}</h3> --}}
<h3>Studen List : </h3>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Id Kelas</th>
            <th>Kelas</th>
            <th>Extracurricular</th>
            <th>Homeroom Teacher</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($satudentList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->class_id}}</td>
                <td>{{$data->class['name']}}</td>
                {{-- panggil function --}}
                {{-- <td>{{$data->extracurriculers}}</td> --}}
                <td>
                    @foreach ($data->extracurriculers as $list)
                        - {{$list->name}} <br>
                    @endforeach
                </td>
                <td>{{$data->class->homeroomTeacher->name}}</td>
            </tr>
            
        @endforeach
    </tbody>
</table>
{{-- <ol>
    @foreach ($satudentList as $data)
        <li>{{$data->name}} | {{$data->gender}} | {{$data->nis}} || {{$data->class_id}}</li>
    @endforeach    
</ol>   --}}
@endsection