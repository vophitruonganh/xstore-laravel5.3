<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 */
class Order extends Model
{
    protected $table = 'orders';

    public $timestamps = true;

    protected $fillable = [
        'ship_id',
        'user_id',
        'date',
        'status',
        'active'
    ];

    protected $guarded = [];

        
}