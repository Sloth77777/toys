<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Http\Requests\Admin\Role\StoreRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use App\Models\Role;
use App\Modules\AdminPanel\Services\Role\RoleService;
use App\Modules\Web\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private readonly RoleService $roleService)
    {
    }

    public function index(): View
    {
        $roles = Role::all();

        return view('admin.roles.roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roles.create', [
            'roles' => $roles,
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $this->roleService->store($request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Продукт успешно добавлен!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('admin.roles.edit', ['role' => $role, 'permissions' => $permissions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, int $id): RedirectResponse
    {
        $this->roleService->update($id, $request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->roleService->delete($id);

        return redirect()->route('admin.roles.index')->with('success', 'Продукт успешно удалён.');
    }
}
