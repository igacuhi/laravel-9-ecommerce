<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Define the table associated with the model (optional)
    protected $table = 'products';

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = ['name', 'slug', 'description', 'price'];

    // Add any additional model logic or relationships here
}
