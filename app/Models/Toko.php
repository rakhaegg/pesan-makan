<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_id', 'name', 'description' ,'pictureId' , 'city' ,'rating'];

    



}
