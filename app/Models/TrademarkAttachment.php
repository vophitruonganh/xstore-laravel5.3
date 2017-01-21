<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrademarkAttachment
 */
class TrademarkAttachment extends Model
{
    protected $table = 'trademark_attachment';

    public $timestamps = false;

    protected $fillable = [
        'trademark_id',
        'attachment_id'
    ];

    protected $guarded = [];



}