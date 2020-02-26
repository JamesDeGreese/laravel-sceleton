<?php

namespace Components\Articles\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{

    protected $table = 'article_categories';

    protected $fillable = ['title'];
}
