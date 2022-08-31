<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
   protected $table = "eleitores";

   protected $fillable = ['nome', 'titulo' , 'zona', 'secao'];
}

