<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $primaryKey = 'category_id';


    protected $fillable = [
        'user_id',
        'address',
        'number',
        'city',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
