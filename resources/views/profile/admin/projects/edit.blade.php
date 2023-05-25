@extends("layouts.app")

@section("page-title", "Edit")

@section("content")
   <h1 class="pb-5 fw-bold text-danger display-1">Benvenuto in Edit</h1>
   <form method="POST" action="{{ route("admin.projects.update", ["project" => $project->id]) }}">

      @csrf
      @method("PUT")

      <div class="mb-2">
         <label for="img" class="form-label">Url immagine:</label>
         <input type="text" class="form-control @error("img") is-invalid @enderror" id="img" value="{{old("img", $project->img)}}" name="img">
         @error("img")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="titolo" class="form-label">Titolo:</label>
         <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" value="{{old("titolo", $project->titolo)}}" name="titolo">
         @error("titolo")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
         <label for="type_id" class="form-label">Seleziona categoria</label>
         <select class="form-select @error("type_id") is-invalid @enderror" name="type_id" id="type_id">
               <option @selected(old("type_id", $project->type_id)=="") value="">Nessuna categoria</option>
               @foreach ($types as $type)
                  <option @selected(old("type_id", $project->type_id)==$type->id) value="{{$type->id}}">{{$type->name}}</option>
               @endforeach
         </select>
         @error("type_id")<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>

      <div class="mb-2">
         <label for="data_creazione" class="form-label">Data_creazione:</label>
         <input type="text" class="form-control @error("data_creazione") is-invalid @enderror" id="data_creazione" value="{{old("data_creazione", $project->data_creazione)}}" name="data_creazione">
         @error("data_creazione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="descrizione" class="form-label">Descrizione:</label>
         <input type="text" class="form-control @error("descrizione") is-invalid @enderror" id="descrizione" value="{{old("descrizione", $project->descrizione)}}" name="descrizione">
         @error("descrizione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3 d-flex justify-content-between">
         @foreach($technologies as $technology)
            <div>
               @if ($errors->any())
                  <input id="technology_{{$technology->id}}" @if (in_array($technology->id , old("technologies", []))) checked @endif type="checkbox" name="technologies[]" value="{{$technology->id}}">
               @else
                  <input id="technology_{{$technology->id}}" @if ($project->technologies->contains($technology->id)) checked @endif type="checkbox" name="technologies[]" value="{{$technology->id}}">
               @endif
               <label for="technology_{{$technology->id}}" class="form-label">{{$technology->nome}}</label>
            </div>
         @endforeach
         @error("technologies")<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Salva</button>
   </form>
@endsection
