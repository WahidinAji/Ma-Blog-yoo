<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Repositories\Articles\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index(Request $request)
    {
        if ($request->has('betw')) {
            DB::enableQueryLog();
            $article = $this->articles->getAll($request->betw);

            // \dd(DB::getQueryLog());
            return response()->json([
                'message' => 'success',
                'data' => $article
            ], Response::HTTP_OK);
        }
    }
    public function show(Article $article)
    {
        return \response()->json([
            'message' => 'success',
            'data' => $article
        ], Response::HTTP_OK);
    }
    public function store(ArticleRequest $request)
    {
        $article = $this->articles->storeArticle($request);
        return \response()->json([
            'message' => 'Article created success',
            'data' => $article
        ], Response::HTTP_CREATED);
    }
    public function destroy(Article $article)
    {
    }
}
