<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    use \Modules\Backend\Traits\MetaInformation;

    const PUBLISHED = 'Published';
    const UNPUBLISHED = 'Unpublished';
    const DRAFT = 'Draft';
    protected $metaTagsTable = 'news_meta_tags';
    protected $fillable = [
        'title', 'sub_title', 'slug', 'guest_id', 'reporter_id',
        'tag_line', 'description', 'short_description', 'view_count',
        'external_url', 'publish_date', 'expiry_date', 'is_fixed',
    ];

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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
