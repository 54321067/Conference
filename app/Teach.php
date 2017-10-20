<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    protected $table = 'professor';
    protected $primaryKey = 'Pid';
    public $timestamps = true;
}
