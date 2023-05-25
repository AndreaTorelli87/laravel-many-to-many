<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

//https://laravel.com/docs/9.x/eloquent#allowing-mass-assignment
class Project extends Model
{
   use HasFactory;
   protected $guarded = [];

   public static function generateSlug(string $titolo) {
      return Str::slug($titolo, "-");
   }

   public function type() {
      return $this->belongsTo(Type::class);
   }

   public function technologies() {
      return $this->belongsToMany(Technology::class);
   }
}
