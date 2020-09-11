<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    const PUBLISHED = 'Published';
    const UNPUBLISHED = 'Unpublished';
    const DRAFT = 'Draft';
    protected $fillable = [];

    public static function status()
    {
        return [
            self::PUBLISHED,
            self::UNPUBLISHED,
            self::DRAFT,
        ];
    }

    public static function publishStatus()
    {
        return ['Yes', 'No', 'Draft'];

    }
}
