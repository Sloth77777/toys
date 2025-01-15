<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\AdminPanel\Services\Product\ProductService;
use App\Modules\AdminPanel\Services\Role\RoleService;
use App\Modules\Web\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\View\View;

class ShowProductCategoryController extends Controller
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

    public function show(int $category, ?int $subCategory = null): View
    {
        $categoryDetails = $this->categoryService->getOneCategory($category, $subCategory);
        $subcategories = $this->categoryService->getSubCategories($categoryDetails->id);
        $products = $this->productService->getProductsByCategoryAndSubcategories($category, $subcategories);
        $categories = $this->categoryService->getAllCategories();

        $data = Carbon::parse($categoryDetails->created_at);

        return view('main.home.categories.show', compact('categories', 'categoryDetails', 'categories', 'products', 'subcategories', 'data'));
    }
}
