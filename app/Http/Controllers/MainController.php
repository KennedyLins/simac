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

        /*try {
            self::setWsdl('http://telemetriaws1.ana.gov.br/ServiceANA.asmx?wsdl');
            $this->service = InstanceSoapClient::init();

            $cities = $this->service->DadosHidrometeorologicos(['codEstacao' => '39145000', 'dataInicio' => '09/04/2020', 'dataFim' => '09/04/2020',]);

            $ciudades = $this->loadXmlStringAsArray($cities->DadosHidrometeorologicosResult);
            dd($ciudades);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }


        //dd($result);*/



        //->DadosHidrometeorologicosResult

        $client = new \nusoap_client('http://telemetriaws1.ana.gov.br/ServiceANA.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        $data = [

            'codEstacao' => '39145000',
            'dataInicio' => '09/04/2020',
            'dataFim'    => '09/04/2020',
        ];

        // Calls
        $result = $client->call('DadosHidrometeorologicos', $data);
        $body   = $client->getHTTPBody($result);
        //$content = $result->DadosHidrometeorologicosResult;
        //$dados = 

        dd($body);
       // dd($body);


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
