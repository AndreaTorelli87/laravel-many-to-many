<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function home() {
      return view("home");
   }

   public function index()
   {
      $projects = Project::all();
      return view("profile.admin.projects.index", compact("projects"));
   }

   public function create()
   {
      $types = Type::all();
      $technologies = Technology::all();
      return view("profile.admin.projects.create", compact("types","technologies"));
   }

   public function store(StoreProjectRequest $request)
   {
      $validated_data = $request->validated();
      $validated_data["slug"] = Project::generateSlug($request->titolo);

      $checkProject = Project::where("slug", $validated_data["slug"])->first();
      if ($checkProject) {
         return back()->withInput()->withErrors(["slug" => "Impossibile creare lo slug per questo progetto, cambia il titolo"]);
      }

      // dd($validated_data);
      $newProject = Project::create($validated_data);

      
      if ($request->has("technologies")) {
         $newProject->technologies()->attach($request->technologies);
      }

      
      return redirect()->route("admin.projects.show", ["project" => $newProject->id])->with("status", "Il nuovo progetto è stato aggiunto con successo!");
   }

   public function show(Project $project)
   {
      return view("profile.admin.projects.show", compact("project"));
   }

   public function edit(Project $project)
   {
      $types = Type::all();
      $technologies = Technology::all();
      return view("profile.admin.projects.edit", compact("project", "types", "technologies"));
   }





   public function update(UpdateProjectRequest $request, Project $project)
   {
      $validated_data = $request->validated();
      $validated_data["slug"] = Project::generateSlug($request->titolo);

      $checkProject = Project::where("slug", $validated_data["slug"])->where("id", "<>", $project->id)->first();

      if ($checkProject) {
         return back()->withInput()->withErrors(["slug" => "Impossibile creare lo slug"]);
      }

      $project->technologies()->sync($request->technologies);
      $project->update($validated_data);

      return redirect()->route("admin.projects.show", ["project" => $project->slug])->with("status", "Il progetto è stato aggiornato con successo!");
   }

   public function destroy(Project $project)
   {
      $project->delete();
      return redirect()->route("admin.projects.index");
   }
}
