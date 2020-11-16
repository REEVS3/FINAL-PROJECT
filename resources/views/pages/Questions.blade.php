@extends('layouts.app')
@section('title','Home')
@section('content')

<form method="POST" action="sendquestions">
@csrf
<h2 class="text-center">  Pace of the course: I need more time to absorb today’s learning (1)  I feel confident moving on to a new topic (5) </h2>
<div class="d-flex justify-content-center my-4">
    <div class="w-75">
      <input type="range" name="Q1" class="custom-range" id="customRange10" min="0" max="5">
    </div>
    <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
</div>
<br>
<h2 class="text-center"> Technical ability: My programming skills have not improved (1) My programming skills have improved (5)</h2>
<div class="d-flex justify-content-center my-4">
    <div class="w-75">
      <input type="range" name="Q2" class="custom-range" id="customRange11" min="0" max="5">
    </div>
    <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
</div>
<br>
<h2 class="text-center"> Sense of achievement: I feel frustrated (1) I feel triumphant (5)  </h2>
<div class="d-flex justify-content-center my-4">
    <div class="w-75">
      <input type="range" name="Q3" class="custom-range" id="customRange12" min="0" max="5">
    </div>
    <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
</div>
<input type="hidden" name="student" id="student" value="{{$Student}}">
<input type="hidden" name="lab" id="lab" value="{{$lab}}">


<button  type="submit" class="btn-rounded btn btn-info">Submit</button>
</form>

<script>
    $(document).ready(function() {

const $valueSpan = $('.valueSpan');
const $value = $('#customRange10');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});





</script>

@endsection
