<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDiscount
 */
class ProductDiscount extends Model
{
    protected $table = 'product_discount';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'discount_id'
    ];

    protected $guarded = [];

        
}