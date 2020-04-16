<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\HidroStation;
use Carbon\Carbon;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {       

        //Criando um objeto da classe HidroStation
        $hidro_stations = new HidroStation;
        $hidro_stations = $hidro_stations::all();
        

        //Criando um objeto da classe NuSoap
        $client = new \nusoap_client('http://telemetriaws1.ana.gov.br/ServiceANA.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        //Criando um objeto da classe Carbon para trabalhar com datas
        $carbon =  Carbon::now();

      
        foreach ($hidro_stations as $hidro_station){            

            $idStation      = $hidro_station->idStation;
            $nameStation    = $hidro_station->nameStation;
            $river          = $hidro_station->river;
            $preAlertLevel  = $hidro_station->preAlertLevel;
            $alertLevel     = $hidro_station->alertLevel;
            $floodLevel     = $hidro_station->floodLevel;

             
            $results   = $client->call('DadosHidrometeorologicos', ['codEstacao' => $idStation, 'dataInicio' => $carbon->format('d/m/Y'), 'dataFim' => $carbon->format('d/m/Y'),]);


                foreach ($results as $result) {              

                    $contents = $result ['diffgram'] ['DocumentElement']; 

                    if(array_key_exists('ErrorTable', $contents)){

                        $niveis = "Nível não coletado";

                    }else{

                        $niveis = $contents ['DadosHidrometereologicos'] [0] ['Nivel'];

                        if(empty($niveis)){

                            $niveis = $contents ['DadosHidrometereologicos'] [1] ['Nivel'];
                        }

                    }                                  
                } 
            
                //echo gettype($contents);
            return view('station.monitorStation', compact('hidro_stations'));

        }
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
