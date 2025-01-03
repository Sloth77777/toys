<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Modules\AdminPanel\Services\Product\ProductService;
use App\Modules\Web\Controllers\Controller;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $productService)
    {
    }
    public function index(): View
    {
        $products = Product::paginate(10);

        return view('admin.products.products', [
            'products' => $products
        ]);
    }
    public function create(): View
    {
        $categories = ProductCategory::all();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }
    public function store(StoreProductRequest $request): RedirectResponse
    {
        $this->productService->store($request->validated());
        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно добавлен!');
    }

    public function edit(Product $product): View
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => ProductCategory::all(),
        ]);
    }

    public function update(UpdateProductRequest $request, int $id): RedirectResponse
    {
        $this->productService->update($id, $request->validated());
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->productService->delete($id);

        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно удалён.');
    }
}
