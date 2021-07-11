<?php


namespace App\Repositories\Articles;


use App\Models\Article;

class ArticleRepository implements IArticleRepository
{

    public function getAll() {
        // TODO: Implement getAll() method.
        return Article::paginate(10);
    }
//    public function getBySlug($article)
//    {
//        // TODO: Implement getById() method.
//        return Article::findOrFail($article);
//    }
    public function storeArticle($request){
        return Article::created($request);
    }
}
