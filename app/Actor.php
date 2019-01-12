<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model // klassi actor loomine nagu mudel
{
    protected $table = 'actor'; // kasutades tabeli actor
	protected $primaryKey='actor_id'; // kus PK on actor_id
	
	//By default, Eloquent expects created_at and updated_at columns to exist on your tables.
	//If you do not wish to have these columns automatically managed by Eloquent, 
	//set the $timestamps property on your model to false
	public $timestamps = false; // ei kasuta created_at ja updated_at
	
	public function films() // funktsioon filmid (relatsioonide määramine)
	{
		return $this->belongsToMany('App\Film'); // ühel actoril on mitu filmi
	}
}

