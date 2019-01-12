<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model // klassi keel loomine
{
    protected $table = 'language'; // kasutades tabeli language
    protected $primaryKey='language_id'; // PK on language_id
}
