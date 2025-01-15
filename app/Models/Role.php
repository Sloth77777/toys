<?php

namespace App\Models;

use Database\Seeders\PermissionsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Permission;

class Role extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'roles';

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_has_permission');
    }

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class , 'role_user','role_id','user_id');
    }

}
