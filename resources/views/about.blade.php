@extends('layout/main')

@section('title', 'About | Coba Framework Laravel')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Hello, {{$nama}}!</h1>
    </div>
  </div>
</div>
@endsection