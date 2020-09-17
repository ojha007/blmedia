<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Backend\Traits\MetaInformation;

class Category extends Model
{

    use MetaInformation;

    const HM = 'HM';
    const OT = 'OT';
    const LS = 'LS';
    const PRIMARY_MENU = 'Primary Menu';
    const SUB_CATEGORY = 'Sub Category';
    const OTHER = 'Other';
    protected $metaTagsTable = 'category_meta_tags';
    protected $metaTagsClass = CategoryMetaTags::class;
    protected $categoryPositionsTable = 'category_positions';
    protected  $categoryPositionsClass = CategoryPositions::class;
    protected $fillable = ['name', 'slug', 'is_active', 'in_mobile'];
    protected $with = ['metaTags'];

    public static function selectCategoryCode()
    {
        return [
            self::HM => self::PRIMARY_MENU,
            self::OT => self::SUB_CATEGORY,
            self::LS => self::OTHER
        ];
    }

    public function news()
    {
        return $this->belongsToMany(News::class);
    }
}
