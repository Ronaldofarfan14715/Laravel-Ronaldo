@extends('layout')

@section('title',"Usuario {$id}")
@section('contenido')


    <h1>USUARIO # {{ $id }}</h1>

    Mostrando el detalle del usuario {{ $id}}

@endsection

