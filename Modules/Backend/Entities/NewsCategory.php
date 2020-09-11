<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{

    const HM = 'HM';
    const OT = 'OT';
    const LS = 'LS';
    const PRIMARY_MENU = 'Primary Menu';
    const SUB_CATEGORY = 'Sub Category';
    const OTHER = 'Other';
    protected $fillable = ['title', 'slug', ''];

    public static function selectCategoryCode()
    {
        return [
            self::HM => self::PRIMARY_MENU,
            self::OT => self::SUB_CATEGORY,
            self::LS => self::OTHER
        ];
    }
}
