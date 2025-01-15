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
        $roles = Role::query()->paginate(5);

        return view('admin.roles.roles', compact('roles'));
    }

    public function create(): View
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roles.create', [
            'roles' => $roles,
            'permissions' => $permissions
        ]);
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $this->roleService->store($request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Роль успешно добавлена!');
    }

    public function edit(int $id): View
    {
        $data = $this->roleService->edit($id);
        return view('admin.roles.edit', $data);
    }

    public function update(UpdateRoleRequest $request, int $id): RedirectResponse
    {
        $this->roleService->update($id, $request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Роль успешно обновлена!');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->roleService->delete($id);
        return redirect()->route('admin.roles.index')->with('success', 'Роль успешно удалена!');
    }
}
