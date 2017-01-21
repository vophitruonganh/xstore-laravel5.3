<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTheme
 */
class UserTheme extends Model
{
    protected $table = 'user_theme';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'site_id',
        'theme_id'
    ];

    protected $guarded = [];

        
}