<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     * At the moment user can have only one role
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getRole()
    {
        return $this->roles()->first();
    }

    /**
     * Verify if user has given role.
     * 
     * @param String $roleName
     * 
     * @return boolean
     */
    public function hasRole($roleName)
    {
        $userRole = $this->getRole();
        if (!$userRole) {
            return false;
        }

        return $userRole->name === $roleName;
    }

    /** 
     * Add role to the user.
     * 
     * @param String $roleName
     * @return User
     */
    public function addRole($roleName)
    {
        if ($this->hasRole($roleName)) {
            return $this;
        }

        $role = Role::where('name', $roleName)->first();
        if (!$role) {
            return $this;
        }

        $this->roles()->attach($role->id);
        return $this;
    }

    /** 
     * Remove user's role.
     * 
     * @param String $roleName
     * @return User
     */
    public function removeRole($roleName)
    {
        $role = Role::where('name', $roleName)->first();
        if (!$role) {
            return $this;
        }

        $this->roles()->detach($role->id);
        return $this;
    }
}
