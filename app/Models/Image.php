<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path_url'];
    public $timestamps = true;
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    public function article_images()
    {
        return $this->hasMany(ArticleImage::class, 'image_id', 'id');
    }
}
