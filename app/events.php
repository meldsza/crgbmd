<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table = 'events';
    protected $fillable = ['id', 'eventname', 'eventtype', 'description', 'eventdate', 'eventvenue', 'eventimage'];
    protected $PrimaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}