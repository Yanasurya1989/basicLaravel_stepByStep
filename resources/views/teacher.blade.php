@extends('layout.mainLayout')

@section('title', 'teacher')

@section('content_wae')
    <h1>ini halaman teacher</h1>
    <h3>Teacher List : </h3>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection