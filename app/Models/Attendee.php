<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;
    protected $table = 'attendees';
   
    protected $fillable = [
		'id','name','email','train_id','company','email','occupation','team_status','info_before','response_description','info_after','time','learn_mode',
	];
  public function train()
  {
    return $this->belongsTo('App\Models\Train', 'train_id', 'id');
  }
}
