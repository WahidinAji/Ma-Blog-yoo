<?php


namespace App\Repositories\Articles;


use App\Models\Article;

interface IArticleRepository
{
    public function getAll($request);
    //    public function getBySlug($article);
    public function storeArticle($request);
}
