<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryPositions extends Model
{
    public $timestamps = false;
    protected $table = 'category_positions';
    protected $fillable = ['front_header_position', 'front_body_position', 'detail_header_position', 'detail_body_position'];


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
