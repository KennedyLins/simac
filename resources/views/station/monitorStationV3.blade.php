<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
  <title>"Monitoramento dos Pluviometros instalados em Pernambuco | APAC - Agência Pernambucana de Águas e Clima"</title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="content-language" content="pt-BR">
  
  
  <!--Refresh Automatico da Pagina de 15 minutos (900 segundos)-->
  <meta http-equiv="refresh" content="300"> 

<link rel="stylesheet" https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css>
<link rel="stylesheet" href="{{asset('css/monitoramento-pluviometrosV3.css')}}" type="text/css">
<link rel="stylesheet" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

<!-- Código acima ok-->

</head>

<body>
	<div class="container-sm">	
		<div class="content">
			<div class="row">
				<img src="{{asset('img/tira-apac-ana-governo.png')}}">
			</div>

			<div class="row border titulo">
			<h2>Monitoramento dos Rios do Estado de Pernambuco</h2>
			</div>

			<div class="listaRios">
			<table class="table table-sm" align="center">
			  <tbody>
			    <tr>
			      <th class="TituloGrid">Local</th>
			      <th class="TituloGrid">Rio</th>
			      <th class="TituloGrid">Data <br> (Último dado)</th>
			      <th class="TituloGrid">Hora <br> (Último dado)</th>
			      <th class="TituloGrid colunaAtual">Nível <br> Atual (cm)</th>
			      <th class="TituloGrid">Nível <br> Alerta (cm) </th>
			      <th class="TituloGrid">Nível <br> Inundação (cm) </th>
			      <th class="TituloGrid">Gráfico</th>
			    </tr>
			      @foreach ($hidro_stations as $hidro_station)
			       
			       $nome 	   = $hidro_station->nameStation;
			       $rio  	   = $hidro_station->river;
			       $dataColeta = $hidro_station->dataColeta;
			       $horaColeta = $hidro_station->horaColeta;
			       $nivel	   = $hidro_station->levelNow;
			       $alerta     = $hidro_station->alertLevel;
			       $flood 	   = $hidro_station->floodLevel;

			       
			       @if($alerta-$nivel <= 50)

			      	 	$nivelClass = "NivelPreAlerta"

			       @elseif ($nivel >= $alerta and $nivel < flood)

			       		$nivelClass = "NivelAlerta"

			       @elseif ($nivel >= flood)

			       		$nivelClass = "NivelInundacao"

			       @else

			       		$nivelClass = $NivelNormal;

			   	   @endif

			    <tr classe=$nivelClass >
			      <td class="gridDados">{{$nome}}</td>
			      <td class="gridDados">{{$rio}}</td>
			      <td class="gridDados">{{$dataColeta}}</td> 
			      <td class="gridDados">{{$horaColeta}}</td>       
			      <td class="gridDados colunaAtual">{{$nivel}}</td>
			      <td class="gridDados">{{$alerta}}</td>
			      <td class="gridDados">{{$flood}}</td>
			      <td class="gridDados">-</td>
			    </tr>
			      @endforeach
			  </tbody>
			</table>
			</div>

		</div>
	</div>	
	
</body>
</html>