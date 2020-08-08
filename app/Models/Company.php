<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //table companies
    protected $table = 'companies';
    protected $primaryKey = 'id';

    // deacitvate timestamps
    public $timestamps = false;

    // personalize timestamps
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

}
