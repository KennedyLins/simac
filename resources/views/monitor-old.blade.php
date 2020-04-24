
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<link rel="stylesheet" href="{{asset('css/stylesheets.css')}}" type="text/css">
</head>

<body>

<h1>Monitoramento dos Rios</h1>


<table class="container">
	<thead>
		<tr>
			<th><h1>Cód. Estação</h1></th>
			<th><h1>Local</h1></th>
			<th><h1>Rio</h1></th>
			<th><h1>Nível <br> Atual</h1></th>
			<th><h1>Nível <br> Pré-alerta (cm)</h1></th>
			<th><h1>Nível <br> Alerta (cm) </h1></th>
			<th><h1>Nível <br> Inundação (cm) </h1></th>
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
</span>

</body>

</html>