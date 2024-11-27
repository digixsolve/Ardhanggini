<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    use HasFactory, HasSlug;
    protected $slugSourceColumn = 'name';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
    public function products()
    {
        return Product::whereJsonContains('product_id', json_encode($this->id));
    }
}
