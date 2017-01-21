<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 */
class Post extends Model
{
    protected $table = 'posts';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'product_id',
        'content',
        'active'
    ];

    protected $guarded = [];

        
}