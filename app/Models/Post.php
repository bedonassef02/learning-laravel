<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // if table in db name not posts
    protected $table = "my_posts";

    // if  table don't have timestamps
    public $timestamps = false;

    // if PK name not id
    protected $primaryKey = "post_id";

    // not auto increment
    public $incrementing = false;

    // if u don't use mysql (use mongoose)
    protected $connection='sqlite';
}
