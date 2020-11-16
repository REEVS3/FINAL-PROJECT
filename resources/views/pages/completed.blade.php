@extends('layouts.app')
@section('title','Home')
@section('content')

<tbody>

@foreach ($Labs as $Lab )


<h2>{{$Lab->lab_name}}</h2>







@endforeach




@foreach ($data as $key)

<h4>Done</h4>

@endforeach








</tbody>


@endsection
