<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;
    protected $table = 'data_users';
    /*protected $fillable=[
        'firstname',
        'lastname',
        'country',
        'city',
        'avatar',
        'imgUrl',
        'user_id'
    ];*/
}
