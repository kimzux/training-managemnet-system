<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $table = 'trains';
   
    protected $fillable = [
		'id','train_name','timetable','date','title','description'
	];


}
