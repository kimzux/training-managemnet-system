<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionasked extends Model
{
    use HasFactory;
    protected $table = 'questionasked';
   
    protected $fillable = [
		'id','train_id','name','company','question','trainer_name'
	];
  public function trainer()
  {
      return $this->hasMany('Trainer');
  }
  public function answertrainer()
  {
      return $this->hasOne('App\Models\Answertrainer','questionasked_id', 'id')->withDefault(new Answertrainer());
  }
}
