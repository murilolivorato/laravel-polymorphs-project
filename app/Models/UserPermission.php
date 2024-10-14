<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class UserPermission extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function roles()
    {
        return $this->belongsToMany(UserRole::class, 'user_permission_roles');
    }
}
