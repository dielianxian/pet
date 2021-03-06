<?php

namespace App\Services;

use App\Repository\Contracts\FoodCategoryRepository;

class FoodCategoryService
{
    /**
     * @var FoodCategoryRepositoryEloquent
     */
    protected $foodCategoryRepository;

    public function __construct(FoodCategoryRepository $foodCategoryRepository)
    {
        $this->foodCategoryRepository = $foodCategoryRepository;
    }

    /**
     * Get FoodCategory list and paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getFoodCategories()
    {
        return $this->foodCategoryRepository->paginate();
    }


    /**
     * Get Search FoodCategory list and paginate.
     *
     * @param int $perPage
     * @return mixed
     */
    public function searchFoodCategories(int $perPage = 0)
    {
        return $this->foodCategoryRepository->searchFoodCategories($perPage);
    }

    /**
     * Get FoodCategory all .
     *
     * @param int $perPage
     * @return mixed
     */
    public function getFoodCategoryAll()
    {
        return $this->foodCategoryRepository->getFoodCategoryAll();
    }

    /**
     * Get one FoodCategory Detail by primary key.
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getFoodCategory($id)
    {
        return $this->foodCategoryRepository->find($id);
    }

    /**
     * Create a new line on FoodCategory.
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|$this
     */
    public function storeFoodCategory($data)
    {
        return $this->foodCategoryRepository->create($data);
    }

    /**
     * Update FoodCategory one line by primary key.
     *
     * @param $id
     * @param array $data
     * @return int
     */
    public function updateFoodCategory($id, $data)
    {
        return $this->foodCategoryRepository->update($id, $data);
    }

    /**
     * Delete FoodCategory one line by primary key.
     *
     * @param $id
     * @return mixed
     */
    public function deleteFoodCategory($id)
    {
        return $this->foodCategoryRepository->deleteById($id);
    }

}