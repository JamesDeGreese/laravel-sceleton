<?php

namespace Components\Articles\Http\Controllers;

use App\Http\Controllers\Controller;
use Components\Articles\Http\Requests\ArticleCategoryRequest;
use Components\Articles\Repositories\ArticleCategoryRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ArticleCategoryController extends Controller
{
    /**
     * @var ArticleCategoryRepository $repository
     */
    protected $repository;

    function __construct(ArticleCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $articleCategories = $this->repository->getCategoriesGrid();

        return response()->view('admin::article_categories.index', [
            'activeLink' => 'article_categories',
            'articleCategories' => $articleCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin::article_categories.create', [
            'activeLink' => 'article_categories',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArticleCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleCategoryRequest $request): RedirectResponse
    {
        $response = [];
        $result = $this->repository->storeModel($request->all());

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'New Article Category successfully created'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article Category can not be created. Please try later'
            ];
        }

        return redirect(route('admin.article_categories.index'))->with('status', $response);
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
        $model = $this->repository->getModelById($id);

        return response()->view('admin::article_categories.edit', [
            'activeLink' => 'article_categories',
            'model' => $model,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ArticleCategoryRequest  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ArticleCategoryRequest $request, $id)
    {
        $response = [];
        $result = $this->repository->updateModel($id, $request->all());

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'New Article Category successfully updated'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article Category can not be updated. Please try later'
            ];
        }

        return redirect(route('admin.article_categories.index'))->with('status', $response);
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
        $result = $this->repository->deleteModel($id);

        if ($result) {
            $response = [
                'success' => true,
                'message' => 'Article Category successfully deleted'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Article Category can not be deleted. Please try later'
            ];
        }

        return response($response);

    }
}
