<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 */
class Product extends Model
{
    protected $table = 'products';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'url',
        'price',
        'count',
        'sale',
        'status',
        'active',
        'trademark_id'
    ];

    protected $guarded = [];

    protected function trademark(){
        $trademark = $this->belongsToMany(new \Xstore\Models\Trademark,'product_trademark');

        return $trademark;
    }

    protected function category(){
        $trademark = $this->belongsToMany(new \Xstore\Models\Category,'product_category');

        return $trademark;
    }

    protected function attachment(){
        return $this->belongsToMany(new \Xstore\Models\Attachment,'product_attachment');
    }

    protected function description(){
        return $this->hasOne(new \Xstore\Models\Description,'product_id');
    }

    protected function discount(){
        return $this->hasOne(new \Xstore\Models\Discount,'id');
    }


}