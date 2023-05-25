@extends("layouts.app")

@section("page-title", "Show")

@section("content")
   <h1 class="fw-bold text-danger display-1">Benvenuto in show</h1>
   <a href="{{route("admin.projects.index")}}" class="btn btn-primary mb-3">Torna alla lista</a>
   <div class="card align-items-center p-3">
      <img src="{{$project->url}}" alt="{{$project->titolo}}">
      <h4 class="card-text">Titolo: {{$project->titolo}}</h4>
      <h6><small>Slug: {{$project->slug}}</small></h6>
      <h3>Tipo: {{$project->type?$project->type->name:"Nessun tipo abbinato"}}</h3>
      <h6 class="card-text">Data_creazione: {{$project->data_creazione}}</h6>
      <p class="card-text">Descrizione: {{$project->descrizione}}</p>
   </div>   
@endsection
