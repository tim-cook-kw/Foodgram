<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $fillable = [];
    protected $table = 'article';
    protected $primaryKey = 'id_article';
}
