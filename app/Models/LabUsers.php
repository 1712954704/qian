<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabUsers extends Model
{
    //
    protected $table = "ims_lab_users";
    protected $fillable = [
        "id","uid","ip","nickname","avatar","sex","city"
    ];
    protected $hidden = [
    ];
}
