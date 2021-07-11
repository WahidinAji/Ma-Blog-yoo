<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;
    protected $fillable = ['image_id', 'article_id'];
    public $timestamps = true;
    public function images()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
    public function articles()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}
