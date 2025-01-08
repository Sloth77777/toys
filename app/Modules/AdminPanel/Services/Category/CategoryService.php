<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Category;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{

    public function store(array $data): self
    {
        ProductCategory::query()->create(['title' => $data['title']]);
        return $this;
    }

    public function update(int $id, array $data): self
    {
        $product = ProductCategory::query()->findOrFail($id);
        $product->update($data);
        return $this;
    }

    public function delete($id): self
    {
        $product = ProductCategory::query()->findOrFail($id);
        $product->delete();
        return $this;
    }

    public function getAllCategories(): Collection
    {
        return ProductCategory::all();
    }

    public function getOneCategory(int $id)
    {
        return ProductCategory::query()->findOrFail($id);
    }
}
