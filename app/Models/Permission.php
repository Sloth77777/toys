<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name'];
    protected $table = 'permissions';

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_has_permission');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_has_permission');
    }
    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class);
    }
}
