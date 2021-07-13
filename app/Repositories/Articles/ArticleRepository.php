<?php


namespace App\Repositories\Articles;


use App\Models\Article;

class ArticleRepository implements IArticleRepository
{

    public function getAll($request)
    {
        // TODO: Implement getAll() method.
        return Article::query()->whereBetween('id', [$request])->orderBy('id', 'DESC')->get();
    }
    //    public function getBySlug($article)
    //    {
    //        // TODO: Implement getById() method.
    //        return Article::findOrFail($article);
    //    }
    public function storeArticle($request)
    {
        return Article::created($request);
    }
}
