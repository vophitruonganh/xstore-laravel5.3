<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsExtend
 */
class ProductsExtend extends Model
{
    protected $table = 'products_extends';

    public $timestamps = true;

    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}