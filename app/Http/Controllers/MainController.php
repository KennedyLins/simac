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
        $stations = new HidroStation;
        $stations = $stations::all();

        //Criando um objeto da classe NuSoap
        $client = new \nusoap_client('http://telemetriaws1.ana.gov.br/ServiceANA.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        //Criando um objeto da classe Carbon para trabalhar com datas
        $carbon =  Carbon::now();

        
        foreach ($stations as $station){            

            $station = $station->idStation;

            $params = [
            'codEstacao' => $station,
            'dataInicio' => $carbon->format('d/m/Y'),
            'dataFim'    => $carbon->format('d/m/Y'),
            ];

             // Calls
            $result   = $client->call('DadosHidrometeorologicos', $params);            

            $contents = $result ['DadosHidrometeorologicosResult'] ['diffgram'] ['DocumentElement'] ;

            //$contents = $result ['DadosHidrometeorologicosResult'];

            //return $contents [0] ['Nivel'];

            //echo $station."<br>";
            //dd($contents);
            //var_dump($contents);
            //echo json_encode($contents);
            //dd($contents);

            //
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
