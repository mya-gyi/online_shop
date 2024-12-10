<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected  $primarykey = 'id';

    protected  $fillable = ['admin_role_id','name','about'];

    public function adminRole()
    {
        return $this->belongsTo(AdminRole::class);
    }

    public function adminUser()
    {
        return $this->belongsTo(User::class);
    }

}
