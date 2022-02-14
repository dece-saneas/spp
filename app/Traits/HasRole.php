<?php

namespace App\Traits;

use App\Models\Role;

trait HasRole
{
    /**
     * Get the user role.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Determine if user has the roles.
     * 
     * @param string $roles
     * @return bool
     */
    public function hasRole(...$roles): bool
    {
        foreach ($roles as $role) {
            if ($this->role->name == $role) return true;
        };

        return false;
    }
}
