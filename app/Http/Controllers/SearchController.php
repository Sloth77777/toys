<?php

namespace App\Http\Controllers;

use App\Http\Requests\Filter\SearchRequest;
use App\Http\Services\SearchService;
use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
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

        public function search(Product $product , SearchRequest $request): View
        {
            $searchTerm = $request->input('search');
            $sortByPrice = $request->input('sort_by_price','');

            $products = $this->searchService->getSearchProducts($searchTerm, $sortByPrice);
            $categories = $this->categoryService->getAllCategories();

            return view('main.home.search', compact( 'products', 'categories','searchTerm','sortByPrice'));
        }
}
