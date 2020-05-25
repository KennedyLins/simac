<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>"Monitoramento dos Pluviometros instalados em Pernambuco | APAC - Agência Pernambucana de Águas e Clima"</title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
  <meta name="content-language" content="pt-BR">
  <meta name="description" content="APAC - Agência Pernambucana de Águas e Clima">
  <meta name="keywords" content="apac, rios, monitoramento">
  <meta name="copyright" content="APAC"> 
  <meta name="author" content="APAC - http://www.apac.pe.gov.br/">
  
  <!--Refresh Automatico da Pagina de 15 minutos (900 segundos)-->
  <meta http-equiv="refresh" content="900"> 

<link rel="stylesheet" href="{{asset('css/monitoramento-pluviometros.css')}}" type="text/css">

<style>
	
#gridDadosRioId{
	
	width: 100%;
	border: solid 2px #c9cdca;
}	

.TituloGrid{
	border: solid 1px #c9cdca;
	font-family:font:0.95em arial, sans-serif;
	text-align: center;	
	font-weight: bold;
	background-color: #e1e3e2;
}
.gridDados{
	
	border: dotted 1px #c9cdca;
	font-family:font:0.95em arial, sans-serif;
	text-align: center;
	vertical-align: middle;
}

th{
	font-weight: bold;
	padding: 1px;
	vertical-align: middle;
}


.NivelNormal{
	
	color: #000000;
}

.NivelPreAlerta{
	
	color: #000000;
	background-color: #f8f885;
}

.NivelAlerta{
	
	color: #000000;
	background-color: #ec9513;
}


.NivelInundacao{
	
	color: #000000;
	background-color: #ff0202;
}

#nivelPreAlertaId{
	
	width: 20px;
	height: 15px;
	background-color: #f8f885;
	border-radius: 5px;
}

#nivelAlertaId{
	
	width: 20px;
	height: 15px;
	background-color: #ec9513;
	border-radius: 5px;
}

#nivelInundacaoId{
	
	width: 20px;
	height: 15px;
	background-color: #ff0202;
	border-radius: 5px;
}


#idpesquisa{
	
	background-color: #179bdb;
	padding: 10px;
	border: dotted 2px #bfcac9;
	border-radius: 5px;
	font-family:font:0.95em arial, sans-serif;
	font-weight: bold;
}

	
</style>

</head>

<body style='background: #E9ECE8 url(../_images/bgAll_simple.png) repeat-x'>
	
	<div id="spinner" class="spinner" style="display:none;">
		<img id="img-spinner" src="../_images/spinner.gif" alt="Carregando" border="0"/> 
		<br/>
		Carregando...
	</div>
	
	<div id="content" style="margin: 0; padding: 0; border: 0; background: url(../_images/bg-topo_3.jpg) fixed;">
		<div class="home" style="background: transparent;">
			<div id="breadcrumbInterno" style="background: white; padding-top: 10px; padding-left: 5px;">
				<span>
					<b>Você está aqui:</b>
				</span> 
				<a title="Ir para P᧩na Inicial" href="http://www.apac.pe.gov.br">Página Inicial</a><a title='Ir para Serviço' href='../pagina.php?page_id=2&subpage_id=1'>Serviço</a><a title='Ir para Monitoramento Hidrológico' href='http://www.apac.pe.gov.br/monitoramento'>Hidrologia</a> Monitoramento dos Rios no Estado de Pernambuco
				<div id="main" style='width: 100%;'> <!--main-->
				
					<br/>
					<br/>				
					<div id="glb-corpo">
						<div class="glb-conteudo">
						<div class="glb-bloco">
								<div class="glb-grid-12">
									<div class="glb-titulo" style="height: 65px;">
												<div id="widget-quote-selector">
													<img src="../_images/tira-apac-ana-governo.png"/>
												</div>
									</div>
									<div class="glb-grid-8"></div>
								</div>
							</div>					
						
							<div class="glb-bloco">
								<div class="glb-grid-12">
									<div class="glb-titulo">
												<div id="widget-quote-selector">
													<h2 class="selected-quote">Monitoramento dos Rios no Estado de Pernambuco</h2>	
												</div>
									</div>
									<div class="glb-grid-8"></div>
								</div>
							</div>

							<div class="glb-bloco">
								<div class="glb-grid-12 topo-especifico-super-wide">
									<div id="company-chart" class="widget-grafico-indice" style="overflow:hidden;">
									
									<!--MAPA-->
									
										<div id="mapa" style="position: relative; display: inline; float: left; margin-top: -1px; width: 940px; height: 484px;"></div>
											<!-- ### As chamadas JavaScripts estão depois da div, após sua declaração, Ac ### -->	
												
												
											<!-- Maps API Javascript Falta a Key colocar depois se preciso, tem que requerer no google-->
											<!--<script src="http://maps.googleapis.com/maps/api/js?key=ColoqueASuaKeyAqui&amp;sensor=false"></script>
											https://developers.google.com/maps/documentation/javascript/get-api-key-->
																																																											
									</div>
									<div class="glb-bloco widget-movers">
										<div class="glb-grid-4 glb-primeiro">
											<div class="widget economy-widget economy-widget-borderless economy-widget-ssi">
												<div class="status-overlay"></div>
												<h3 class="widget-titulo">Acompanhamento dos níveis dos Rios em tempo real</h3>
																											
													<div id='respostaPesquisa'>
													
													<table id='gridDadosRioId'>
														<tbody>
													    <tr>
													      <th>Local</th>
													      <th>Rio</th>
													      <th>Data</th>
													      <th>Hora</th>
													      <th>Nível <br> Atual</th>
													      <th>Nível <br> Alerta (cm) </th>
													      <th>Nível <br> Inundação (cm) </th>
													    </tr>

													    @foreach ($hidro_stations as $hidro_station) 
													    <tr>
													      <td>{{$hidro_station->nameStation}}</td>
													      <td>{{$hidro_station->river}}</td>
													      <td>{{$hidro_station->dataColeta}}</td> 
													      <td>{{$hidro_station->horaColeta}}</td>       
													      <td>{{$hidro_station->levelNow}}</td>
													      <td>{{$hidro_station->alertLevel}}</td>
													      <td>{{$hidro_station->floodLevel}}</td>
													    </tr>
													      @endforeach
													  </tbody>
													

													
													
													</table>
													</div>	

													<div class="widget-informativo-principal">																								<!--Mensagens-->														
													</div>
												</div>
											</div>
										</div>

									</div>
									<script type="text/javascript">
									$(function(){
										$(".widget-ultimas-noticias .titulo-widget").css({"border-top":0, "padding-top":0});
									});
									</script>
								</div>
							</div>
						</div>
					</div>				
				</div><!--fim main-->
				<div class="mainBgBottom"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="multi/assets/prettify.js"></script>
</body>
</html>