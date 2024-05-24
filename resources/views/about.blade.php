@extends('layouts.main')

@section('container')
    <h1>LKS | About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{asset('img/cecilion.jpg')}}" alt="gmbr" width="200" height="200" class="img-thumbnail rounded">
@endsection
