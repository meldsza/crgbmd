<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['imagetitle', 'description', 'galleryimage']; //columns in database
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}