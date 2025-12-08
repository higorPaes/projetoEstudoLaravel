<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use ILluminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable; //for send notifications user

    public    $timestamps = true;
    protected $table      = 'users';
    protected $fillable   = ['user_id','social_network', 'social_id', 'social_email', 'social_avatar'];
    protected $hidden     = []; 
}
