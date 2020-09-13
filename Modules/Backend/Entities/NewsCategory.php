<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Backend\Traits\MetaInformation;

class NewsCategory extends Model
{

    use MetaInformation;

    const HM = 'HM';
    const OT = 'OT';
    const LS = 'LS';
    const PRIMARY_MENU = 'Primary Menu';
    const SUB_CATEGORY = 'Sub Category';
    const OTHER = 'Other';
    protected $metaTagsTable = 'news_category_meta_tags';
    protected $metaTagsClass = NewsCategoryMetaTags::class;
    protected $fillable = ['title', 'slug', ''];
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
        return $this->belongsToMany(News::class,'news_categories_pivot');
    }
}
