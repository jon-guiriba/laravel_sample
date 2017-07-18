@extends('layouts.app')

@section('content')
<script src='{{asset(js/calendar.js}}'></script>

<div class="container-fluid">
  <div id="calendar"></div>
  <a href="{{asset(img/influential-1.jpg}}" data-lightbox="test">Image #2</a>
  <a href="{{asset(img/influential-2.jpg}}" data-lightbox="test">Image #3</a>
  <a href="{{asset(img/influential-3.jpg}}" data-lightbox="test">Image #4</a>
</div>
@endsection
