<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleImage extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'articles_images';
    protected $dates = ['deleted_at'];
    protected $fillable = ['image_name','article_id'];

    public function article(){
        return $this->belongsTo(Article::class,'article_id');
    }
}
