@extends("layouts.app")

@section("page-title", "Index")

@section("content")

   <a href="{{route("admin.projects.create")}}" class="btn btn-primary my-4">Crea nuovo Project</a>

   <div class="row">
      @foreach ($projects as $project)
      <div class="col-4 overflow-y-hidden">  
         <div class="flip-card overflow-y-hidden">
            <div class="flip-card-inner position-relative overflow-y-hidden">
               <div class="flip-card-front position-absolute bg-white w-100 h-100">
                  <div class="card card-body text-center mb-4 bg-white">
                  <img src="{{$project->url}}" alt="{{$project->titolo}}">
                  <h4 class="card-text">{{$project->titolo}}</h4>
                  <h6 class="card-text">{{$project->data_creazione}}</h6>
                  </div>
               </div>
               <div class="flip-card-back position-absolute text-center p-2 bg-white">
                  <div class="d-flex justify-content-around mb-2">
                     <a class="btn btn-success me-2" href="{{route("admin.projects.show", ["project" => $project->id])}}"><i class="fa-solid fa-eye"></i></i></a>
                     <a class="btn btn-warning me-2" href="{{route("admin.projects.edit", ["project" => $project->id])}}"><i class="fa-solid fa-pen"></i></i></a>
                     <form action="{{route("admin.projects.destroy", ["project" => $project->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                     </form>
                  </div>
                  <p class="card-text overflow-scroll">Descrizione: {{$project->descrizione}}</p>
                  <div class="d-flex justify-content-around mb-2">
                     <a class="btn btn-primary me-2 rounded-circle fs-4" href="/admin/projects"><i class="fa-solid fa-globe"></i></a>
                     <a class="me-2" href="https://github.com/AndreaTorelli87"><i class="fa-brands fa-github bg-black text-white rounded-circle fs-2 p-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
@endsection
