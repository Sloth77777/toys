<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Product;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    public function store(array $data): self
    {
        $image = $data['image'];
        $imageName = Str::random(20) . '.' . $data['id'] . '.' . $image->extension();
        $path = Storage::disk('public')->putFileAs('images/products', $image, $imageName);
        $data['image'] = $path;
        Product::query()->firstOrCreate(['id' => $data['id']], $data);

        return $this;
    }

    public function update(int $id, array $data): self
    {
        $image = $data['image'];
        $imageName = Str::random(20) . '.' . $data['id'] . '.' . $image->extension();
        $path = Storage::disk('public')->putFileAs('images/products', $image, $imageName);
        $data['image'] = $path;

        $product = Product::query()->findOrFail(['id' => $data['id']], $id);
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

    public function getProductsByCategoryAndSubcategories(int $categoryId, Collection $subcategories, string $sortByPrice = ''): Collection
    {
        $query = Product::query()->where('category_id', $categoryId);

        foreach ($subcategories as $subcategory) {
            $query->orWhere('category_id', $subcategory->id);
        }

        $this->SortByPriceProducts($query, $sortByPrice);

        return $query->get();
    }


    public function SortByPriceProducts($query, string $sortByPrice = ''): void
    {
        if (!empty($sortByPrice) && ($sortByPrice === 'asc' || $sortByPrice === 'desc')) {
            $query->orderBy('price', $sortByPrice);
        }
    }
}
