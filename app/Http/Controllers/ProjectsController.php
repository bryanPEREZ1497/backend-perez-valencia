<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SQL
        // $projects = DB::select('select * from app.projects ');
        //QUERY BUILDER
        // $projects = DB::table('app.projects')->get();
        //ELOQUENT->MODELS
        $projects = Project::get();
        return response()->json(
            [
                'data' => $projects,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del proyecto se ejecutó correctamente',
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
        // DB::insert('insert into app.projects ( code ,date,description,approved,title,created_at,updated_at)
        // values(?,?,?,?,?,?,?)', [
        //     $request->code,
        //     $request->date,
        //     $request->description,
        //     $request->approved,
        //     $request->title,
        //     $request->created_at,
        //     $request->updated_at
        // ]);

        //QUERY BUILDER
        // $project = DB::table('app.projects')->insert([
        //     "code" => $request->code,
        //     "date" => $request->date,
        //     "description" => $request->description,
        //     "approved" => $request->approved,
        //     "title" => $request->title,
        //     "created_at" => $request->created_at,
        //     "updated_at" => $request->updated_at
        // ]);

        //No se escriben los timestamps porque ya lo hace Eloquent
        // $project = Project::create([
        //     "code" => $request->code,
        //     "date" => $request->date,
        //     "description" => $request->description,
        //     "approved" => $request->approved,
        //     "title" => $request->title,
        // ]);

        $project = new Project();
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();

        return response()->json(
            [
                'data' => $project,
                'msg' => [
                    'summary' => 'consultado correctamente',
                    'detail' => 'Proyecto creado correctamente',
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
    //1 forma
    // public function show($project)
    // {
    //     //SQL
    //     // $projects = DB::select('select * from app.projects where id=? ', [$project]);
    //     //QUERY BUILDER
    //     // $project = DB::table('app.projects')->where('id', '=', $project)->first();
    //     //$project = DB::table('app.projects')->find($project);
    //     //ELOQUENT
    //     $project = Project::find($project);
    //     return response()->json(
    //         [
    //             'data' => $project,
    //             'msg' => [
    //                 'summary' => 'consulta correcta',
    //                 'detail' => 'la consulta del proyecto se ejecutó correctamente',
    //                 'code' => '200'
    //             ]
    //         ],
    //         200
    //     );
    // }
    //2 forma
    public function show(Project $project)
    {
        return response()->json(
            [
                'data' => $project,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del proyecto se ejecutó correctamente',
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
    public function update(Request $request, $project)
    {
        $project = Project::find($project);
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL proyecto se actualizó correctamente',
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
    //1 forma
    // public function destroy($project)
    // {
    //     $project = Project::find($project);
    //     $project->delete();
    //     return response()->json(
    //         [
    //             'data' => $project,
    //             'msg' => [
    //                 'summary' => 'Eliminado correctamente',
    //                 'detail' => 'EL proyecto se eliminó correctamente',
    //                 'code' => '201'
    //             ]
    //         ],
    //         201
    //     ); //devolver el objeto eliminado

    // }
    //2 forma
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(
            [
                'data' => $project,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ],
            201
        ); //devolver el objeto eliminado
    }

    public function updateState()
    {
        $project = 'updateState';
        return response()->json(
            [
                'data' => $project,
                'msg' => [
                    'summary' => 'Actualizado',
                    'detail' => 'EL proyecto se actualizó correctamente',
                    'code' => '201'
                ]
            ],
            201
        ); //devolver el objeto eliminado

    }
}
