<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected  $table = 'orders';
    protected  $fillable=['name','quantity'];
}
