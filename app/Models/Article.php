<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'category', 'body'];
    public $timestamps = true;

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function queries(){
        DB::table('articles')->orderBy('id','DESC')->select('id','title', 'slug', 'category', 'body')->get();
    }
    public function article_images()
    {
        return $this->hasMany(ArticleImage::class, 'article_id', 'id');
    }
    public function images()
    {
        return $this->belongsToMany(Image::class, 'images', 'image_id', 'article_id', 'id');
    }
}
