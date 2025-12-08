<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable; //for send notifications user

    public    $timestamps = true;
    protected $table      = 'users';
    protected $fillable   = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission']; //paramaters list passed in create user
    protected $hidden     = ['password', 'remember_token']; //when user model is read, the atributters password and remember_token not come in list
}