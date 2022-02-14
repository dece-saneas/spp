<?php

namespace App\Traits;

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
     * Determine if user has the role.
     */
    public function hasRole($role)
    {
        return $this->role->name == $role;
    }
}
