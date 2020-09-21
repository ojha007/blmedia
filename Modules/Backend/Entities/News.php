<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{

    use SoftDeletes;
    use \Modules\Backend\Traits\MetaInformation;

    const PUBLISHED = 'Published';
    const UNPUBLISHED = 'Unpublished';
    const DRAFT = 'Draft';
    protected $metaTagsTable = 'news_meta_tags';
    protected $fillable = [
        'title', 'sub_title', 'guest_id', 'reporter_id', 'slug',
        'tag_line', 'description', 'short_description', 'view_count',
        'external_url', 'publish_date', 'expiry_date', 'publish_status'
    ];
    protected $with = ['categories'];

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
        return $this->belongsToMany(Category::class, 'news_categories');
    }

    public function reporter()
    {
        return $this->belongsTo(Reporter::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function getCategoryNameAttribute()
    {
//        dd($this->categories()->pluck('slug'));
        return $this->categories()->pluck('slug')->toArray();
    }
}
