<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    public function store(array $data): self
    {
        $image = $data['image'];
        $imageName = Str::random(20) . '.' . $image->extension();
        $path = Storage::disk('public')->putFileAs('images/products', $image, $imageName);
        $data['image'] = $path;
        Product::query()->firstOrCreate($data);

        return $this;
    }

    public function update(int $id, array $data): self
    {
        $image = $data['image'];
        $imageName = Str::random(20) . '.' . $image->extension();
        $path = Storage::disk('public')->putFileAs('images/products', $image, $imageName);
        $data['image'] = $path;
        $product = Product::query()->findOrFail($id);
        $product->update($data);

        return $this;
    }

    public function delete(int $id): self
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();

        return $this;
    }

    public function getAllProducts(): Collection
    {
        return Product::all();
    }

    public function getPaginatedProducts(int $limit): LengthAwarePaginator
    {
        $randomIds = Product::query()
            ->inRandomOrder()
            ->limit($limit)
            ->pluck('id');

        return Product::query()
            ->whereIn('id', $randomIds)
            ->paginate($limit);
    }

    public function getRelatedProducts(Product $product): Collection
    {
        return Product::query()
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(3)
            ->get();
    }
    public function getOneProduct(int $id): Product
    {
        return Product::query()->findOrFail($id);
    }
    public function getProductsByCategory(int $categoryId): Collection
    {
        return Product::query()->where('category_id', $categoryId)->get();
    }

    public function getProductsByCategoryAndSubcategories(int $categoryId, Collection $subcategories): Collection
    {
        $products = Product::query()->where('category_id', $categoryId)->get();

        foreach ($subcategories as $subcategory) {
            $products = $products->merge(Product::query()->where('category_id', $subcategory->id)->get());
        }

        return $products;
    }

    public function getSearchProducts(string $search = null): Collection
    {
        if (empty($search)) {
            return collect();
        }
        return Product::query()->where('title', 'like', '%' . $search . '%')->get();
    }

}
