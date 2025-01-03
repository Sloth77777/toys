<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\ProductCategory;
use App\Modules\AdminPanel\Services\Category\CategoryService;
use App\Modules\Web\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {
    }

    public function index(): View
    {
        $categories = ProductCategory::paginate(10);

        return view('admin.categories.categories', compact('categories'), [
            'categories' => $categories
        ]);
    }

    public function create(): View
    {
        return view('admin.categories.create', []);
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $this->categoryService->store($request->validated());
        return redirect()->route('admin.categories.index');
    }

    public function edit(ProductCategory $category): View
    {
        return view('admin.categories.edit', [
            'categories' => $category
        ]);
    }

    public function update(CategoryRequest $request, int $id): RedirectResponse
    {
        $this->categoryService->update($id, $request->validated());
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id): RedirectResponse
    {
        $this->categoryService->delete($id);
        return redirect()->route('admin.categories.index');
    }

}
