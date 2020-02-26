<?php

namespace Components\Articles\Http\Controllers;

use App\Http\Controllers\Controller;
use Components\Articles\Http\Requests\ArticleCategoryRequest;
use Components\Articles\Http\Requests\ArticleRequest;
use Components\Articles\Repositories\ArticleCategoryRepository;
use Components\Articles\Repositories\ArticleRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * @var ArticleRepository $articleRepository
     */
    protected $articleRepository;

    /**
     * @var ArticleCategoryRepository $articleCategoryRepository
     */
    protected $articleCategoryRepository;

    function __construct(
        ArticleRepository $articleRepository,
        ArticleCategoryRepository $articleCategoryRepository
    )
    {
        $this->articleRepository = $articleRepository;
        $this->articleCategoryRepository = $articleCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $articles = $this->articleRepository->getCategoriesGrid();

        return response()->view('admin::articles.index', [
            'activeLink' => 'articles',
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $categoriesList = $this->articleCategoryRepository->getList();

        return response()->view('admin::articles.create', [
            'activeLink' => 'articles',
            'categoriesList' => $categoriesList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArticleRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $response = [];
        $result = $this->articleRepository->storeModel($request->all());

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'New Article successfully created'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article can not be created. Please try later'
            ];
        }

        return redirect(route('admin.articles.index'))->with('status', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $model = $this->articleRepository->getModelById($id);
        $categoriesList = $this->articleCategoryRepository->getList();

        return response()->view('admin::articles.edit', [
            'activeLink' => 'articles',
            'model' => $model,
            'categoriesList' => $categoriesList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ArticleRequest  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ArticleRequest $request, $id)
    {
        $response = [];
        $result = $this->articleRepository->updateModel($id, $request->all());

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'New Article successfully updated'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article can not be updated. Please try later'
            ];
        }

        return redirect(route('admin.articles.index'))->with('status', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [];
        $result = $this->articleRepository->deleteModel($id);

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'Article successfully deleted'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article can not be deleted. Please try later'
            ];
        }

        return response($response);

    }
}
