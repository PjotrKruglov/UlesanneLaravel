<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model // loome klass film
{
    protected $table = 'film'; // kasutades tabeli film
    protected $primaryKey='film_id'; // uus PK on film_id

    public function actors() //funktsiooni aktorid loomine
    {
        return $this->belongsToMany(Actor::class)->withPivot('cast'); // ühel filmil on palju aktoreid ja pivot tabelil on uus verg cast
    }

    public function categories() //funktsiooni kategooriad loomine
    {
        return $this->belongsToMany(Category::class); // ühel filmil on mitu kategooriad
    }

    public function language() //funktsiooni keel loomine
    {
        return $this->belongsTo(Language::class); // ühel filmil on üks keel
    }

}
