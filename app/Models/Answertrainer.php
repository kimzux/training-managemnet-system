<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answertrainer extends Model
{
    use HasFactory;
    protected $table = 'answertrainer';
   
    protected $fillable = [
		'id','questionasked_id','answer'
	];
    public function questionasked()
    {
      return $this->belongsTo('App\Models\Questionasked', 'questionasked_id', 'id');
    }
}
