<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $guarded = ["id"];

    public function product()
    {
        return $this->hasOne(Products::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

}
