@extends('layouts.app')
@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
<h1>Tables</h1>

<h3>Student</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Student ID</th>
        <th>Username</th>
    </tr>
    </thead>
    @foreach($Student as $students)
    <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->first_name}}</td>
        <td>{{$students->last_name}}</td>
        <td>{{$students->student_id}}</td>
        <td>{{$students->username}}</td>
    </tr>
    @endforeach
</table>
<br>
<br>

<h3>Lab</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>Lab Name</th>
    </tr>
    </thead>
    @foreach($Labs as $lab)
    <tr>
        <td>{{$lab->id}}</td>
        <td>{{$lab->lab_name}}</td>
    </tr>
    @endforeach
</table>
<br>
<br>
<h3> Student and Question</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>Student id</th>
        <th>Lab id</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
    </tr>
    </thead>
    @foreach($Pivot as $Pivots)
    <tr>
        <td>{{$Pivots->id}}</td>
        <td>{{$Pivots->student_id}}</td>
        <td>{{$Pivots->lab_id}}</td>
        <td>{{$Pivots->question_1}}</td>
        <td>{{$Pivots->question_2}}</td>
        <td>{{$Pivots->question_3}}</td>
    </tr>
    @endforeach
</table>



@endsection