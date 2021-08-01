<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = ['player1', 'player2'];
        return response()->json(
            [
                'data' => $players,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de los jugadores se ejecutó correctamente',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = 'player1';
        return response()->json(
            [
                'data' => $player,
                'msg' => [
                    'summary' => 'consultado correctamente',
                    'detail' => 'Jugador creado correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
        //devolver el objeto creado

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = 'player1';
        return response()->json(
            [
                'data' => $player,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del jugador se ejecutó correctamente',
                    'code' => '200'
                ]
            ],
            200
        );
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
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL jugador se actualizó correctamente',
                    'code' => '201'
                ]
            ]
        ); //se envia null

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = 'player1';
        return response()->json(
            [
                'data' => $player,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL jugador se eliminó correctamente',
                    'code' => '201'
                ]
            ],
            201
        ); //devolver el objeto eliminado

    }

    public function updateState()
    {
        $prop = 'updateState';
        return response()->json(
            [
                'data' => $prop,
                'msg' => [
                    'summary' => 'Actualizado',
                    'detail' => 'EL jugador se actualizó correctamente',
                    'code' => '201'
                ]
            ],
            201
        ); //devolver el objeto eliminado

    }
}
