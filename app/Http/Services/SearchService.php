<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use Illuminate\Support\Collection;

class SearchService
{
    protected CategoryService $categoryService;
    protected ProductService $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function search(string $query, Product $product): array
    {
        $searchTerm = $query;

        $category = $this->categoryService->getOneCategory($product->category_id);

        $products = $this->getSearchProducts($searchTerm);

        $categories = $this->categoryService->getAllCategories();

        return compact('products', 'categories', 'category', 'searchTerm');
    }

    public function getSearchProducts(string $search = null, string $sortByPrice = ''): Collection
    {
        if (empty($search)) {
            return collect();
        }

        $query = Product::query()
            ->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });

        $this->productService->SortByPriceProducts($query, $sortByPrice);

        return $query->get();
    }
}
