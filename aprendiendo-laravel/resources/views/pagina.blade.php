{{--Heredo--}}
@extends('layout.master')

{{--titulo de la pagina--}}
@section('titulo', 'Master en php')

{{--Esto me sustituye lo que yo tengo en header en master--}}
@section('header')
    {{--Con parent, no se sustituye, se agrega a lo que ya esta en master--}}
    @parent()
    <h2>Hola</h2>
@stop


@section('content')
<h1>Contenido de la pagina genericaaa</h1>
@stop
{{--Se sustituye el contenido que hay dentro de content por el de aqui--}}
