<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDistrict
 */
class UserDistrict extends Model
{
    protected $table = 'user_district';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'district_id'
    ];

    protected $guarded = [];

        
}