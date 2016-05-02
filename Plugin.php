<?php
/**
 * Created by PhpStorm.
 * User: Lamin Sanneh
 * Date: 5/19/14
 * Time: 12:49 AM
 */

namespace DevINX\ContactUs;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Backend\Facades\Backend;

class Plugin extends PluginBase{

    /**
     * Returns information about this plugin, including plugin name and developer name.
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Contact Us',
            'description' => 'devinx.contactus::lang.strings.plugin_desc',
            'author'      => 'DevINX',
            'icon'        => 'icon-envelope'
        ];
    }

    public function registerComponents()
    {
        return [
            'DevINX\ContactUs\Components\ContactForm' => 'contactForm',
        ];
    }

    public function registerPermissions()
    {
        return [
            'DevINX.ContactUs.access_settings' => [
                'tab'   => 'devinx.contactus::lang.permissions.tab',
                'label' => 'devinx.contactus::lang.permissions.settings'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'devinx.contactus::lang.strings.settings_label',
                'description' => 'devinx.contactus::lang.strings.settings_desc',
                'category'    => 'Marketing',
                'icon'        => 'icon-envelope',
                'class'       => 'DevINX\ContactUs\Models\Settings',
                'permissions' => ['DevINX.ContactUs.access_settings'],
                'order'       => 100
            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'devinx.contactus::emails.message' => 'devinx.contactus::lang.strings.email_desc',
        ];
    }
}
