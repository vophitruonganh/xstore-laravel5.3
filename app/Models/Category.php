<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 */
class Category extends Model
{
    protected $table = 'category';

    public $timestamps = true;

    protected $fillable = [
    	'id',
        'name',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];

    /**
     * [attachment description]
     * @return [Collection] [List Attachment]
     */
    public function attachment(){
        return $this->belongsToMany(new \Xstore\Models\Attachment,'category_attachment');
    }

    /**
     * [trademarks description]
     * @return [Collection] [List trademark]
     */
    public function trademarks(){
        return $this->belongsToMany(new \Xstore\Models\Trademark,'trademark_category');
    }

    /**
     * [products description]
     * @return [collection] [List product]
     */
    public function products(){
        return $this->belongsToMany(new \Xstore\Models\Product,'product_category');
    }

    public function getProducts($limit = null){
        if ($limit != null && $limit > 0) {
            return $this->products()->paginate(16);
        }
    }
}