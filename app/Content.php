<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $table = 'contents';
    // fillable
    protected $fillable = ['title', 'slug', 'description', 'link', 'icons', 'image', 'status', 'author', 'category'];
}
