<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HidroStation;


class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hidro_stations = new HidroStation;

        $hidro_stations = $hidro_stations::all();

        foreach ($hidro_stations as $hidro_station) {
            
            $nameStation    = $hidro_station->nameStation;
            $idStation      = $hidro_station->idStation;
            $river          = $hidro_station->river;
            $preAlertLevel  = $hidro_station->preAlertLevel;
            $alertLevel     = $hidro_station->alertLevel;
            $floodLevel     = $hidro_station->floodLevel;

           //echo $nameStation.$idStation.$river.$preAlertLevel.$alertLevel.$floodLevel;
            return view('station.index', compact('hidro_stations'));
        }
            
    }


        //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('station.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, HidroStation $hidro_station)
    {
        $hidro_station->nameStation    = $request->nameStation;
        $hidro_station->idStation     = $request->idStation;
        $hidro_station->river         = $request->river;
        $hidro_station->preAlertLevel = $request->preAlertLevel;
        $hidro_station->alertLevel    = $request->alertLevel;
        $hidro_station->floodLevel    = $request->floodLevel;

        $hidro_station->save();
        
        return "ok";

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
