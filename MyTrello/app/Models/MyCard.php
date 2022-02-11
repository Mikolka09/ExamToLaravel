<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCard extends Model
{
    use HasFactory;

    protected $fillable=['task', 'column_id', 'rgba'];
}
