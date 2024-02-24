<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blog_table'; //table name
    protected $fillable=['title','description','category'];
}
