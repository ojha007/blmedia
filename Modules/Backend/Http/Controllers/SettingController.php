<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Http\Responses\Response;


class SettingController extends Controller
{

    /**
     * @var string
     */
    protected $routePrefix = 'settings';
    /**
     * @var string
     */
    protected $viewPath = 'backend::setting.';


    public function index()
    {

        $site_settings = $this->getSettingAttributes();
        return new Response($this->viewPath . 'index', compact('site_settings'));
    }

    public function getSettingAttributes()
    {
        return [

            'general_setting' => [
                'website_name' => 'text',
                'slogan' => 'text',
                'website_url' => 'text',
                'website_email' => 'email',
                'contact_number' => 'tel',
                'opening_hours' => 'time',
                'address' => 'text',
                'description' => 'textarea',
                'map' => 'textarea',
            ],
            'social_media_setting' => [
                'facebook' => 'text',
                'twitter' => 'text',
                'instagram' => 'text',
                'youtube' => 'text',
                'skype' => 'text',
                'whatsapp' => 'text',
                'google' => 'text',
                'linked in' => 'text',
            ],
            'meta_setting' => [
                'meta_title' => 'text',
                'meta_keywords' => 'textarea',
                'meta_description' => 'textarea',
            ],
            'organization_setting' => [
                'vat_number' => 'number',
            ]

        ];
    }


}
