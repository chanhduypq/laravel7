<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $dateFormat = 'Y-m-d h:i:s';
}