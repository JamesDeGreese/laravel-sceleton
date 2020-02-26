<?php

namespace Components\Articles\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['category_id', 'title', 'description', 'content'];
}
