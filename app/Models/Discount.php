<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Discount
 */
class Discount extends Model
{
    protected $table = 'discounts';

    public $timestamps = false;

    protected $fillable = [
        'hot',
        'content',
        'type',
        'take',
        'over',
        'start',
        'end',
        'start_limit',
        'end_limit',
        'active'
    ];

    protected $guarded = [];

        
}