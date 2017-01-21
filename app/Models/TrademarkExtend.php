<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrademarkExtend
 */
class TrademarkExtend extends Model
{
    protected $table = 'trademark_extends';

    public $timestamps = true;

    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}