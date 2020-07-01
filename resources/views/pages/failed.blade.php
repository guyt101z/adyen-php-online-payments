@extends('layouts.app')

@section('content')
<title>Refused</title>

<div class="status-container">
  <div class="status">
    <img src="{{ asset('img/failed.svg') }}" class="status-image" alt="">
    <p class="status-message">The payment was refused. Please try a different payment method or card.</p>
    <a class="button" href="/" to="#/">Return Home</a>
  </div>
</div>
@endsection