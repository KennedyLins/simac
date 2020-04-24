
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   

@stop


@section('content')


<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>


<body>

 <h1 align="center">Monitoramento dos Rios no Estado de Pernambuco</h1> <br>

<div class="content">

<div class="box-body table-responsive no-padding">

<table class="table table-hover">
  <tbody>
    <tr>
      <th>Cód. Estação</th>
      <th>Local</th>
      <th>Rio</th>
      <th>Nível <br> Atual</th>
      <th>Nível <br> Pré-alerta (cm)</th>
      <th>Nível <br> Alerta (cm) </th>
      <th>Nível <br> Inundação (cm) </th>
    </tr>

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
</div>
</div>


</body>

</html>



























<!--
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





############### Cód. 2 ####################





<div class="container">         

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

