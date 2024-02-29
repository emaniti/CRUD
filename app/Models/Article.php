<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use SoftDeletes;
    protected $table = 'articles';
    protected $dates = ['deleted_at'];
    use HasFactory;

    protected $fillable = ['title', 'content','main_image'];

    public function getArticleImages()
    {
        return $this->hasMany(ArticleImage::class,'article_id');
    }
}
