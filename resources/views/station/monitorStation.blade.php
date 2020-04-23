
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 align="center">Monitoramento dos Rios no Estado de Pernambuco</h1> <br>

@stop


@section('content')


<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>

  <link rel="stylesheet" href="{{asset('css/stylesheets.css')}}" type="text/css">
</head>

<body>
<table class="container">
  <thead>
    <tr>
      <th><h1>Local</h1></th>
      <th><h1>Rio</h1></th>
      <th><h1>Nível <br> Atual</h1></th>
      <th><h1>Nível <br> Pré-alerta (cm)</h1></th>
      <th><h1>Nível <br> Alerta (cm) </h1></th>
      <th><h1>Nível <br> Inundação (cm) </h1></th>
      <th><h1>Cor</h1></th>
    </tr>
  </thead>

  <tbody>
    
    @foreach ($hidro_stations as $hidro_station) 
    <tr>
      <td>{{$hidro_station->nameStation}}</td>
      <td>{{$hidro_station->river}}</td>      
      <td>{{$hidro_station->levelNow}}</td>
      <td>{{$hidro_station->preAlertLevel}}</td>
      <td>{{$hidro_station->alertLevel}}</td>
      <td>{{$hidro_station->floodLevel}}</td>
      <td>{{$alertColor}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
</span>

</body>

</html>

<!--<div class="container">         

<table class="table  table-hover ">
  <thead class="thead-light">
    <tr>
      <th scope="col" align="center">Cód. Estação</th>
      <th scope="col" align="center">Local</th>
      <th scope="col" align="center">Rio</th>
      <th scope="col" align="center">Nível Atual (cm)</th>
      <th scope="col" align="center">Nível de Pré-Alerta (cm)</th>
      <th scope="col" align="center">Nível de Alerta (cm) </th>
      <th scope="col" align="center">Nível de Inundação (cm) </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($hidro_stations as $hidro_station) 
    <tr>
      <td>{{$hidro_station->idStation}}</td>
      <td>{{$hidro_station->nameStation}}</td>
      <td>{{$hidro_station->river}}</td>      
      <td>{{$hidro_station->levelNow}}</td>
      <td>{{$hidro_station->preAlertLevel}}</td>
      <td>{{$hidro_station->alertLevel}}</td>
      <td>{{$hidro_station->floodLevel}}</td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>-->
@stop


@section('css')
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

