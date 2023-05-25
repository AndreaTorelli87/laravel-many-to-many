<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
   public function run()
   {
      $projects = config("projects");

      foreach ($projects as $project) {
         $newProject = new Project();
         
         $newProject->img = $project["img"];
         $newProject->titolo = $project["titolo"];
         $newProject->slug = Str::slug($newProject->titolo, "-");
         $newProject->data_creazione = $project["data_creazione"];
         $newProject->descrizione = $project["descrizione"];
         $newProject->link_github = $project["link_github"];
         $newProject->link_website = $project["link_website"];
         $newProject->save();
      }
   }
}
