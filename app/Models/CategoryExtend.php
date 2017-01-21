<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryExtend
 */
class CategoryExtend extends Model
{
    protected $table = 'category_extends';

    public $timestamps = true;

    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}