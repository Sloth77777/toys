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

        if (!empty($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
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
