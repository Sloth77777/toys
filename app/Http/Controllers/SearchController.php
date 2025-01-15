<?php

namespace App\Http\Controllers;

use App\Http\Services\SearchService;
use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController
{
    protected SearchService $searchService;
    protected ProductService $productService;
    protected CategoryService $categoryService;

    public function __construct(SearchService $searchService, ProductService $productService, CategoryService $categoryService)
    {
        $this->searchService = $searchService;
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function search(Product $product , Request $request): View
    {
        $searchTerm = $request->input('search');

        $products = $this->productService->getSearchProducts($searchTerm);
        $categories = $this->categoryService->getAllCategories();
//        $category = $this->categoryService->getOneCategoryProducts($product->category_id);
//        $subcategories = $this->categoryService->getSubCategories($category->category_id);

        return view('main.home.search', compact( 'products', 'categories','searchTerm'));
    }
}
