<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectAuthorController extends Controller
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
        $authors = Author::get();
        return response()->json(
            [
                'data' => $authors,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del author se ejecutó correctamente',
                    'code' => '200'
                ]
            ],
            200
        );
    }
    // 1 forma
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     // DB::insert('insert into app.projects ( code ,date,description,approved,title,created_at,updated_at)
    //     // values(?,?,?,?,?,?,?)', [
    //     //     $request->code,
    //     //     $request->date,
    //     //     $request->description,
    //     //     $request->approved,
    //     //     $request->title,
    //     //     $request->created_at,
    //     //     $request->updated_at
    //     // ]);

    //     //QUERY BUILDER
    //     // $project = DB::table('app.projects')->insert([
    //     //     "code" => $request->code,
    //     //     "date" => $request->date,
    //     //     "description" => $request->description,
    //     //     "approved" => $request->approved,
    //     //     "title" => $request->title,
    //     //     "created_at" => $request->created_at,
    //     //     "updated_at" => $request->updated_at
    //     // ]);
    //     //ELOQUENT    
    //     //No se escriben los timestamps porque ya lo hace Eloquent
    //     // $project = Project::create([
    //     //     "code" => $request->code,
    //     //     "date" => $request->date,
    //     //     "description" => $request->description,
    //     //     "approved" => $request->approved,
    //     //     "title" => $request->title,
    //     // ]);

    //     $author = new Author();
    //     $author->email = $request->email;
    //     $author->identification = $request->identification;
    //     $author->names = $request->names;
    //     $author->phone = $request->phone;
    //     $author->save();
    //     return response()->json(
    //         [
    //             'data' => $author,
    //             'msg' => [
    //                 'summary' => 'consultado correctamente',
    //                 'detail' => 'Author creado correctamente',
    //                 'code' => '201'
    //             ]
    //         ],
    //         201
    //     );
    //     //devolver el objeto creado

    // }


    //2 forma
    // public function store(Request $request)
    // {
    //     $author = new Author();
    //     $project = Project::find($request->project['id']);
    //     $author->project()->associate($project); //project es el metodo creado en el modelo de author
    //     $author->email = $request->email;
    //     $author->identification = $request->identification;
    //     $author->names = $request->names;
    //     $author->phone = $request->phone;
    //     $author->age = $request->phone;
    //     $author->save();

    //     return response()->json(
    //                 [
    //                     'data' => $author,
    //                     'msg' => [
    //                         'summary' => 'consultado correctamente',
    //                         'detail' => 'Author creado correctamente',
    //                         'code' => '201'
    //                     ]
    //                 ],
    //                 201
    //             );
    //             //devolver el objeto creado
    // }
    //3 forma: author depende de dos tablas: project y nacionality(hipotética)
    // public function store(Request $request, Project $project)
    // {
    //     $author = new Author();
    //     // $nationality = Nationality::find($request->nationality['id']);
    //     $author->project()->associate($project);
    //     // $author->nationality()->associate($nationality);

    //     $author->names = $request->names;
    //     $author->email = $request->email;
    //     $author->age = $request->age;
    //     $author->phone = $request->phone;
    //     $author->identification = $request->identification;

    //     $author->save();

    //     return response()->json(
    //         [
    //             'data' => $author,
    //             'msg' => [
    //                 'summary' => 'consultado correctamente',
    //                 'detail' => 'Author creado correctamente',
    //                 'code' => '201'
    //             ]
    //         ],
    //         201
    //     );
    //     //devolver el objeto creado
    // }
    //4 forma
    public function store(Request $request, Project $project)
    {
        $author = new Author();
        $author->project()->associate($project); //project es el metodo creado en el modelo de author
        $author->email = $request->email;
        $author->identification = $request->identification;
        $author->names = $request->names;
        $author->phone = $request->phone;
        $author->age = $request->phone;
        $author->save();

        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'consultado correctamente',
                    'detail' => 'Author creado correctamente',
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
    public function show($author)
    {
        //SQL
        // $projects = DB::select('select * from app.projects where id=? ', [$project]);
        //QUERY BUILDER
        // $project = DB::table('app.projects')->where('id', '=', $project)->first();
        //$project = DB::table('app.projects')->find($project);
        //ELOQUENT
        $author = Author::find($author);
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del author se ejecutó correctamente',
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
    public function update(Request $request, $author)
    {
        // $author = Author::find($author);
        // $author->email = $request->email;
        // $author->identification = $request->identification;
        // $author->names = $request->names;
        // $author->phone = $request->phone;
        // $author->save();
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL author se actualizó correctamente',
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
    public function destroy($author)
    {
        $author = Author::find($author);
        $author->delete();
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL author se eliminó correctamente',
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
