<?php

return [
    'strings'     => [
        'plugin_desc'               => 'Prosty, kompletny i modularny formularz kontaktowy',
        'email_desc'                => 'Email wysyłany do administratora',
        'recipient_email'           => 'Odbiorca e-maila',
        'recipient_email_comment'   => 'Osoba, do której wysyłany będzie e-mail',
        'recipient_email_desc'      => 'Osoba, do której wysyłany będzie e-mail',
        'recipient_name'            => 'Nazwa odbiorcy',
        'recipient_name_comment'    => 'Imię i nazwisko osoby do której wysyłany będzie e-mail',
        'recipient_name_desc'       => 'Imię i nazwisko osoby do której wysyłany będzie e-mail',
        'subject'                   => 'Temat',
        'subject_comment'           => 'Temat wiadomości',
        'subject_desc'              => 'Temat wiadomości',
        'confirmation_text'         => 'Tekst potwierdzenia',
        'confirmation_text_comment' => 'Tekst wyświetlany po wysłaniu wiadomości',
        'confirmation_text_desc'    => 'Tekst wyświetlany po wysłaniu wiadomości',
        'settings_label'            => 'Ustawienia ContactUs',
        'settings_desc'             => 'Zarządzaj ustawieniami wtyczki ContactUs.',
        'component_name'            => 'Wyświetlacz formularza kontaktowego',
        'component_desc'            => 'Wyświetla formularz kontaktowy',
        'inject_bootstrap'          => 'Dodaj pliki bootstrapa',
        'inject_bootstrap_desc'     => 'Wybierz, czy dodać pliki css i js frameworka bootstrap',
        'inject_main_script'        => 'Dodaj główny skrypt',
        'inject_main_script_desc'   => 'Wybierz, czy dodać główny skrypt wtyczki',
        'site_key'                  => 'Klucz strony',
        'site_key_comment'          => 'Klucz strony otrzymasz przy konfiguracji usługi CAPTCHA w Google',
        'site_key_desc'             => 'Klucz strony otrzymasz przy konfiguracji usługi CAPTCHA w Google',
        'secret_key'                => 'Sekret',
        'secret_key_comment'        => 'Sekret (Secret Key) otrzymasz przy konfiguracji usługi CAPTCHA w Google',
        'secret_key_desc'           => 'Sekret (Secret Key) otrzymasz przy konfiguracji usługi CAPTCHA w Google',
        'enable_server_captcha_validation'            => 'Włącz walidację CAPTCHA',
        'enable_server_captcha_validation_comment'    => 'Wybierz, jeśli captcha ma być wysyłana do Google w celu walidacji (opcjonalne, nie zalecane)',
        'enable_server_captcha_validation_desc'       => 'Wybierz, jeśli captcha ma być wysyłana do Google w celu walidacji (opcjonalne, nie zalecane)',
        'enable_captcha'            => 'Włącz CAPTCHA',
        'enable_captcha_comment'    => 'Włącz funkcjonalność CAPTCHA formularza kontaktowego',
        'enable_captcha_desc'       => 'Włącz funkcjonalność CAPTCHA formularza kontaktowego'
    ],
    'permissions' => [
        'tab'      => 'Wtyczka ContactUs',
        'settings' => 'Dostęp do ustawień',
    ],
    'tabs'        => [
        'main'      => 'Główne ustawienia',
        'forms'     => 'Formularze'
    ],
    'forms'       => [
        'name'      => 'Wprowadź imię',
        'email'     => 'Wprowadź e-mail',
        'subject'   => 'Wprowadź temat',
        'message'   => 'Wprowadź wiadomość',
        'send'      => 'Wyślij'
    ]
];
