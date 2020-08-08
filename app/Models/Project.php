<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //table projects
    protected $table = 'projects';
    protected $primaryKey = 'id';
    // protected $incrementing = 'false';  ->Se utiliza para controllar el autoincremento de la llave primaria.

    // deactivate timestamps
    public $timestamps = false;

    // personalize timestamps
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
}
