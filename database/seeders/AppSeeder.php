<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //forma 1
        // Project::factory(10)->create();

        //forma 2
        Project::factory(21)
            // ->has(Author::factory()->count(3), 'authors')
            ->hasAuthors(3, [
                'age' => 20
            ])
            ->create([
                'approved' => true
            ]);

        //forma 3
        // $projects = Project::factory(10)->create();
        // Project::factory(10)->create()->state(new Sequence([],[],[]))
    }
    function createProjectsAuthors()
    {
        //forma 4
        // $projects=Project::factory(10)->create([
        //     'tltle' => 'Hola mundo',//siempre tendra este valor, no importa si en la factory se intenta guardar algo más
        //     'approved' => true//siempre tendra este valor, no importa si en la factory se intenta guardar algo más
        // ]);

        // foreach ($projects as $project ) {
        //    Author::factory()
        // }

    }
}
