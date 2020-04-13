<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\HidroStation;
use SoapClient;
use SimpleXMLElement;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    
    public function index()
    {       

        $client = new \nusoap_client('http://telemetriaws1.ana.gov.br/ServiceANA.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        $data = [
            'codEstacao' => '39145000',
            'dataInicio' => '09/04/2020',
            'dataFim'    => '10/04/2020',
        ];

        // Calls
        $result   = $client->call('DadosHidrometeorologicos', $data);
        $contents = $result ['DadosHidrometeorologicosResult'] ['diffgram'] ['DocumentElement'] ['DadosHidrometereologicos'];
    
        echo $contents [4] ['Nivel'];
       /*foreach ($cont ents as $content){
           
           $nivel = $content ['Nivel'];
           //dd($nivel)."<br>";
           echo $nivel."<br>";
       }*/

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
