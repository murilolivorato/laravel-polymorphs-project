<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserRoleUser extends Pivot
{
    use HasFactory;

    protected $table = 'user_role_users';

    protected $fillable = ['user_id', 'user_role_id'];
}
