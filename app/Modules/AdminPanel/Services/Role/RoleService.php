<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Role;

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;

class RoleService
{
    public function store(array $data): self
    {
        $role = Role::create([
            'title' => $data['title'],
        ]);

        // Привязываем разрешения, если они есть
        if (isset($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        // Создаем разрешения, если они переданы
        if (isset($data['permissions'])) {
            foreach ($data['permissions'] as $permissionId) {
                Permission::firstOrCreate(['id' => $permissionId]);
            }
        }

        return $this;
    }

    public function update(int $id, array $data): self
    {
        $role = Role::findOrFail($id);
        $role->update($data);

        if (isset($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        return $this;
    }

    public function delete(int $id): self
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return $this;
    }
}
