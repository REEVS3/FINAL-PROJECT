@extends('layouts.app')
@section('title','Home')
@section('content')


<h2 class="text-center">Checkpoints</h2>
<form class="md-form px-2 d-flex justify-content-center" action="senddata" method="POST">
    @csrf

    <select required name="student" id="student" class="selectpicker mx-3" data-live-search="true" >
        <option value="" disabled selected>Name</option>
        @foreach ($Student as $Students)
    <option value="{{$Students->id}}">{{$Students->first_name}} {{$Students->last_name}}</option>

        @endforeach
    </select>



    <select required name="Lab"  id="lab" class="selectpicker mx-3" data-live-search="true" >
        <option value="" disabled selected>Lab</option>
        @foreach ($Labs as $lab)
    <option value="{{$lab->id}}">{{$lab->lab_name}}</option>

        @endforeach
    </select>


    <input placeholder="Password" class="password mx-3" type="password" name="password" id="password">


    <button type="submit" class="btn-rounded btn btn-info">Submit</button>
  </form>



@endsection
