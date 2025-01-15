<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;

class SearchService
{
    protected CategoryService $categoryService;
    protected ProductService $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function search(string $query): array
    {
        $searchTerm = $query;

        $category = $this->categoryService->getOneCategory($product->category_id);

        $products = $this->productService->getSearchProducts($searchTerm);

        $categories = $this->categoryService->getAllCategories();

        return compact('products','categories','category','searchTerm');
    }
}
