<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryAttachment
 */
class CategoryAttachment extends Model
{
    protected $table = 'category_attachment';

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'attachment_id'
    ];

    protected $guarded = [];

        
}