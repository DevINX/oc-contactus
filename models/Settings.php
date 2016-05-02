<?php
/**
 * Created by PhpStorm.
 * User: Lamin Sanneh
 * Date: 5/19/14
 * Time: 10:35 AM
 */

namespace DevINX\ContactUs\Models;

use Model;
class Settings extends Model{

    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public $translatable = ['confirmation_text', 'name_input', 'email_input', 'subject_input', 'message_input', 'send_button'];

    public $settingsCode = 'DevINX_ContactUs_settings';

    public $settingsFields = 'fields.yaml';
} 