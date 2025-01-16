<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use App\Modules\Web\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\View\View;

class ShowProductController extends Controller
{
    protected ProductService $productService;
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function show(Product $product): View
    {
        $categories = $this->categoryService->getAllCategories();
        $products = $this->productService->getPaginatedProducts(3);
        $category = $this->categoryService->getOneCategory($product->category_id);
        $subcategories = $this->categoryService->getSubCategories($category->category_id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        $data = Carbon::parse($product->created_at);

        return view('main.home.show', compact('product', 'category', 'products', 'categories', 'data', 'relatedProducts', 'subcategories'));
    }

}
