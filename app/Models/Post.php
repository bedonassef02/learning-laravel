<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $fillable = ['title', 'body'];

// u can use this for only coulmns don't insert
    protected $guarded = [];
}
