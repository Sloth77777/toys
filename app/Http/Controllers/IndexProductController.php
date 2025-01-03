<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use App\Modules\Web\Controllers\Controller;
use Illuminate\View\View;

class IndexProductController extends Controller
{
    protected ProductService $productService;
    protected CategoryService $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index(Product $product): View
    {
        $categories = $this->categoryService->getAllCategories();
        $product_pag = $this->productService->getPaginatedProducts(3);
        $products = $this->productService->getAllProducts();

        return view('main.home.home', compact('products', 'product_pag', 'categories'));
    }

}
