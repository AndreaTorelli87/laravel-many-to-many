<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateProjectRequest extends FormRequest
{
   public function authorize()
   {
      return true;
   }
   //https://laravel.com/docs/9.x/validation#available-validation-rules
   public function rules()
   {
      return [
         "img" => "required|url|max:255",
         "titolo" => "required|max:50",
         "data_creazione" => "required|max:10",
         "descrizione" => "required|max:65535",
         "link_github" => "url",
         "link_website" => "url",
         'type_id' => 'exists:types,id',
      ];
   }

   public function messages() {
      return [
         "img.required" => "Url dell'immagine richiesta",
         "img.url" => "L'url dell'immagine deve essere valida, esempio: https://www.laravel.com",
         "img.max" => "L'url dell'immagine deve essere al massimo di 255 caratteri",
         "titolo.required" => "Il titolo è richiesto",
         "titolo.max" => "Il titolo deve essere al massimo di 50 caratteri",
         "data_creazione.required" => "La data di creazione è richiesta",
         "data_creazione.max" => "Il campo data di creazione deve essere al massimo di 10 caratteri",
         "descrizione.required" => "La descrizione è richiesta",
         "descrizione.max" => "La descrizione deve essere lunga al massimo 65535 caratteri",
         "link_github.url" => "L'url di GitHub deve essere valida, esempio: https://github.com/AndreaTorelli87",
         "link_website.url" => "L'url del sito deve essere valida, esempio: https://www.ilmiosito.com",
         "type_id" => "Il tipo di progetto deve far parte dell'elenco dei tipi"
      ];
   }
}