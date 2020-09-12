<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $type = 'Contacts';

    protected $fillable = [
        'name',
        'organization',
        'facebook_url',
        'twitter_url',
        'phone_number',
        'email',
        'address',
        'slug',
        'caption',
        'description',
        'image',
        'is_active',
    ];

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


}
