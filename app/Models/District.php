<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 */
class District extends Model
{
    protected $table = 'districts';

    public $timestamps = true;

    protected $fillable = [
        'province_id',
        'name'
    ];

    protected $guarded = [];

    public function province(){
    	return $this->hasMany(app('province'),'id');
    }
}