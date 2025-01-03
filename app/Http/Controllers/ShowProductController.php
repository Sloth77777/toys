<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use App\Modules\AdminPanel\Services\Role\RoleService;
use App\Modules\Web\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\View\View;

class ShowProductController extends Controller
{
    protected RoleService $roleService;
    protected ProductService $productService;
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService, RoleService $roleService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
        $this->roleService = $roleService;
    }

    public function show(Product $product, ProductCategory $category): View
    {
        $categories = $this->categoryService->getAllCategories();
        $products = $this->productService->getPaginatedProducts(3);
        $category = $this->categoryService->getOneCategory($product->category_id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        $data = Carbon::parse($product->created_at);

        return view('main.home.show', compact('product', 'category', 'products', 'categories','data','relatedProducts'));
    }
}
