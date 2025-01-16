<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Role;

use App\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleService
{
    public function store(array $data): self
    {
        $role = Role::query()->create([
            'title' => $data['title'],
        ]);

        if (!empty($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        return $role;
    }

    public function edit(int $id): array
    {
        $role = Role::query()->findOrFail($id);
        $permissions = Permission::all();

        return [
            'role' => $role,
            'permissions' => $permissions,
        ];
    }

    public function update(int $id, array $data): self
    {
        $role = Role::query()->findOrFail($id);
        $role->update($data);

        if (isset($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        return $this;
    }

    public function delete(int $id): self
    {
        $role = Role::query()->findOrFail($id);
        $role->delete();

        return $this;
    }
}
