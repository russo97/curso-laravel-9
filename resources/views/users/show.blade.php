@extends('layouts.app')

@section('title', 'Visualizando usuário: ' . $user -> name)

@section('content')
    <h1>Usuário único</h1>

    <h2>{{ $user -> name }}</h2>
    <h3>{{ $user -> email }}</h3>
@endsection
