@extends('layouts.main')


<style>
.about {
    height: 80vh;
}
</style>
@section('container')
<div class="about d-flex flex-column justify-content-center align-items-center">
    <h1 class="mb-5">About</h1>
    
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
</div>

@endsection