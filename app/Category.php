<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model // loome klass category
{
    protected $table = 'category'; // kasutades tabeli category
    protected $primaryKey='category_id'; // määrame uus PK

    public function films() // funktsioon filmid
    {
       return $this->belongsToMany(Film::class); // ühel kategoorial on mitu filmi
    }
}
