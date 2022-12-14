<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;


class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'buyers';

    protected $guarded = ['id'];


    public function cart()
    {
        return $this->hasMany(Carts::class);
    }

    public function message()
    {
        return $this->hasMany(Messages::class,'user_id','id');
    }
}
