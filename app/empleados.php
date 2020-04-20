<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empleados extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id_empleado';
 protected $fillable=['id_empleado','nombre','app','apm','correo','email','password'];

    protected $date=['deleted_at'];
}
