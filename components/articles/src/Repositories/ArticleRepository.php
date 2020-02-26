<?php

namespace Components\Articles\Repositories;

use Components\Articles\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleRepository
{
    const CATEGORIES_PER_PAGE = 20;

    /**
     * @var Article $model
     */
    protected $model;

    function __construct(Article $model)
    {
        $this->model = $model;
    }

    /**
     * Return filtered collection of models
     *
     * @param array $filters
     * @return LengthAwarePaginator
     */
    public function getCategoriesGrid(array $filters = []): LengthAwarePaginator
    {
        $articleCategories = $this->model->paginate(static::CATEGORIES_PER_PAGE);

        return $articleCategories;
    }

    /**
     * Get model by ID
     *
     * @param int $id
     * @return Article
     */
    public function getModelById(int $id): Article
    {
        $Article = $this->model->findOrFail($id);

        return $Article;
    }

    /**
     * Store model with given data
     *
     * @param array $data
     * @return bool
     */
    public function storeModel(array $data): bool
    {
        $this->model->fill($data);

        try {
            return $this->model->save();
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Update model with given data
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateModel(int $id, array $data): bool
    {
        $model = $this->model->findOrFail($id);

        try {
            return $model->update($data);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Delete model with given ID
     *
     * @param int $id
     * @return bool
     */
    public function deleteModel(int $id): bool
    {
        $model = $this->model->findOrFail($id);

        try {
            return $model->delete();
        } catch (\Exception $e) {
            return false;
        }
    }
}
