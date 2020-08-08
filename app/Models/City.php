<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //table cities
    protected $table = 'cities';
    protected $primaryKey = 'id';

    // deactivate timestamps
    protected $timestamps = false;

    // personalize timestamps
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

}
