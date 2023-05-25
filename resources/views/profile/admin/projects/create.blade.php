@extends("layouts.app")

@section("page-title", "Create")

@section("content")
   <h1 class="pb-5 fw-bold text-danger display-1">Benvenuto in Create</h1>
   <form method="POST" action="{{ route("admin.projects.store") }}">

      @csrf

      <div class="mb-2">
         <label for="img" class="form-label">Url immagine:</label>
         <input type="text" class="form-control @error("img") is-invalid @enderror" id="img" name="img" value="{{old("img")}}">
         @error("img")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="titolo" class="form-label">Titolo:</label>
         <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" name="titolo" value="{{old("titolo")}}">
         @error("titolo")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
         <label for="type_id" class="form-label">Seleziona tipo</label>
         <select class="form-select @error("type_id") is-invalid @enderror" name="type_id" id="type_id">
               <option @selected(old("type_id")=="") value="">Nessun tipo</option>
            @foreach ($types as $type)
               <option @selected(old("type_id")==$type->id) value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
         </select>
         @error("type_id")<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>

      <div class="mb-2">
         <label for="data_creazione" class="form-label">Data_creazione:</label>
         <input type="text" class="form-control @error("data_creazione") is-invalid @enderror" id="data_creazione" name="data_creazione" value="{{old("data_creazione")}}">
         @error("data_creazione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="descrizione" class="form-label">Descrizione:</label>
         <input type="text" class="form-control @error("descrizione") is-invalid @enderror" id="descrizione" name="descrizione" value="{{old("descrizione")}}">
         @error("descrizione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3 d-flex justify-content-between">
         @foreach($technologies as $technology)
            <div>
               <input id="technology_{{$technology->id}}" @if (in_array($technology->id , old('technologies', []))) checked @endif type="checkbox" name="technologies[]" value="{{$technology->id}}">
               <label for="technology_{{$technology->id}}"  class="form-label">{{$technology->nome}}</label>
            </div>
         @endforeach
         @error('technologies')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>

      <button type="submit" class="btn btn-primary">Salva</button>
   </form>
@endsection
