@extends('layout.mainLayout')

@section('title', 'extracurriculer')

@section('content_wae')
    <h1>ini halaman Eksakul</h1>
    <h3>List ekstrakurrikuler</h3>
    <table class="table">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Anggota</th>
        </thead>
        <tbody>
            @foreach ($eksakulList as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->name}}</td>
                    {{-- <td>{{$list->students}}</td> --}}
                    <td>
                        @foreach ($list->students as $dataAnggota)
                            - {{$dataAnggota->name}} <br>
                        @endforeach
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection