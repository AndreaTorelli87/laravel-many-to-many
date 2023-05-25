<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//https://laravel.com/docs/9.x/eloquent#allowing-mass-assignment
class Project extends Model
{
   use HasFactory;
   protected $guarded = [];

   public function type() {
      return $this->belongsTo(Type::class);
   }
}
