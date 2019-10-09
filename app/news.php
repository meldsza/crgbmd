<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    protected $fillable=['id','newshead','description','newsdate'];
    protected $PrimaryKey='id';
}
