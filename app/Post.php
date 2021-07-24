<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //PrimaryKey
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true; 
}
