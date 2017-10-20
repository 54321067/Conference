<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paper_form extends Model
{
    protected $table = 'paper_form';
    protected $primaryKey = 'paper_id';
    public $timestamps = true;
}
