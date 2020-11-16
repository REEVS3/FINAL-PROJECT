@extends('layouts.app')
@section('title','Home')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            @foreach ($Labs as $lab)
        <th>{{$lab->lab_name}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($Students as $i => $student)
            
            <tr>
                <td>{{$student->first_name}}</td>
            @foreach ($display[$i] as $state)
                <td>{{$state}}</td>
            @endforeach
        </tr>

        @endforeach
    </tbody>
</table>




@endsection
