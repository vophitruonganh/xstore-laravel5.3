<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteRole
 */
class SiteRole extends Model
{
    protected $table = 'site_role';

    public $timestamps = false;

    protected $fillable = [
        'site_id',
        'role_id'
    ];

    protected $guarded = [];

        
}