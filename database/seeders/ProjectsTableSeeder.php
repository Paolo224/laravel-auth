<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $NewProject = new Project();
            $NewProject->Nome_progetto = $faker->word(3);
            $NewProject->Descrizione_progetto = $faker->paragraph();
            $NewProject->Data_inizio_progetto = $faker->dateTime();
            $NewProject->Data_fine_progetto = $faker->dateTime();
            $NewProject->Immagine;
            $NewProject->Nome_sviluppatore = $faker->name();
            $NewProject->save();
        }
    }
}
