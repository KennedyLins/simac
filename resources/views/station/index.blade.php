
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 align="center">LISTA DE ESTAÇÕES</h1>

@stop


@section('content')

<div class="container">         

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome da Estação</th>
      <th scope="col">Cód. da Estação</th>
      <th scope="col">Rio</th>
      <th scope="col">Nível de Pré-Alerta</th>
      <th scope="col">Nível de Alerta</th>
      <th scope="col">Nível de Inundação</th>
      <th scope="col">Configurações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($hidro_stations as $hidro_station) 
    <tr>
      <th scope="row">{{$hidro_station->nameStation}}</th>
      <td>{{$hidro_station->idStation}}</td>
      <td>{{$hidro_station->river}}</td>
      <td>{{$hidro_station->preAlertLevel}}</td>
      <td>{{$hidro_station->alertLevel}}</td>
      <td>{{$hidro_station->floodLevel}}</td>
      <td>Editar  Excluir</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

