<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Trademark
 */
class Trademark extends Model
{
    protected $table = 'trademarks';

    public $timestamps = true;

    protected $fillable = [

        'name',
        'category_id',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];

    public function category(){
        return $this->hasMany(app('category'),'id');
    }

    public function attachment(){
        return $this->belongsToMany(app('attachment'),'trademark_attachment');
    }

    public function products(){
        return $this->belongsToMany(app('product'),'product_trademark');
    }
    public function getProducts($limit = null){
        if($limit != null && $limit > 0){
            return $this->products()->paginate($limit);
        }else{
            return $this->products();
        }
    }

}