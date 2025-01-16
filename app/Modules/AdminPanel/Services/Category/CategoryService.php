<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Category;

use App\Models\ProductCategory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

//use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public function index(): LengthAwarePaginator
    {
        $categories = ProductCategory::query()->paginate(10);

        foreach ($categories as $category) {
            $category->subcategories = $this->getSubcategories($category->id);
        }

        return $categories;
    }

    public function store(array $data): self
    {
        $categoryData = ['title' => $data['title']];

        if (isset($data['parent_id'])) {
            $categoryData['parent_id'] = $data['parent_id'];
        }

        ProductCategory::query()->firstOrCreate($categoryData);

        return $this;
    }

    public function update(int $id, array $data): self
    {
        $category = ProductCategory::query()->findOrFail($id);

        if (isset($data['parent_id'])) {
            $category->parent_id = $data['parent_id'];
        }

        $category->update($data);

        return $this;
    }


    public function delete($id): self
    {
        $category = ProductCategory::query()->findOrFail($id);
        $category->delete();
        return $this;
    }

    public function getAllCategories(): Collection
    {
        return ProductCategory::all();
    }

    public function getOneCategory(int $id, ?int $subCategoryId = null): ProductCategory
    {
        if ($subCategoryId !== null) {
            return ProductCategory::query()->findOrFail($subCategoryId);
        }
        return ProductCategory::query()->findOrFail($id);
    }

    public function getSubcategories(int $parentId = null): Collection
    {
        if ($parentId === null) {
            return collect();
        }
        return ProductCategory::query()->where('parent_id', $parentId)->get();
    }

    public function getOneCategoryProducts(): ProductCategory
    {
        return ProductCategory::query()->findOrFail();
    }
}
