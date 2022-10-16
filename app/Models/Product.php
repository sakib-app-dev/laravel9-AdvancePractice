<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['title','category','is_active','description','image'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function Color()
    {
        return $this->belongsTo(Color::class);
    }
    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }
   
}
