<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $primaryKey = 'Form_ID';
    public $timestamps = true;
}
