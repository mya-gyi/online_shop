<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primarykey = 'id';

    protected $fillable = ['user_id'];

    public function normalUser()
    {
        return $this->belongsTo(User::class);
    }

    public function customerOrders()
    {
        return $this->hasMany(Order::class);
    }

    public function customerProducts()
    {
        return $this->hasMany(Product::class);
    }

    
}
