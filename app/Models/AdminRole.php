<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    use HasFactory;

    protected $table = 'admin_role';

    protected $fillable = ['name', 'roles_id'];

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
