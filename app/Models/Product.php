<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',          // Allow 'name' to be mass-assigned
        'Price',         // Allow 'Price' to be mass-assigned
        'Description',  
        'image', // Allow 'Description' to be mass-assigned
        'stock',         // Allow 'stock' to be mass-assigned
    ];
}
