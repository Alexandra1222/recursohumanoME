@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary btn-lg>" href="{{route('admin.pofs.create')}}">Nuevo Pof</a>
@stop

@section('content')
    @livewire('admin.pofs-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop