<?php

$COOKIE_CONSENT_NAME = env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent');
$COOKIE_LIFETIME = 30 * 6; // In days (Default 30 * 6 = 6 months)
$COOKIE_LIFETIME_UM = 'months';

return [
	/*
	 * Use this setting to enable the cookie consent dialog.
	 */
	'enabled' => env('COOKIE_CONSENT_ENABLED', true),

	/*
	 * The name of the cookie in which we store if the user
	 * has agreed to accept the conditions.
	 */
	'cookie_name' => $COOKIE_CONSENT_NAME,

	/*
	 * Set the cookie duration in days.
	 */
	'cookie_lifetime' => $COOKIE_LIFETIME,

    /*
     * 4 types of cookie
     */
	'cookie_types' => [
		'necessary' => $COOKIE_CONSENT_NAME.'_necessary',
		'statistics' => $COOKIE_CONSENT_NAME.'_statistics',
        'marketing' => $COOKIE_CONSENT_NAME.'_marketing',
		'functional' => $COOKIE_CONSENT_NAME.'_functional',
	],

    /*
     * All cookies by type
     */
    'cookies' => [
        'necessary' => [
            // Laravel
            'XSRF-TOKEN' => [
                'duration' => [
                    'value' => env('SESSION_LIFETIME'),
                    'um' => 'minutes'
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            'laravel_session' => [
                'duration' => [
                    'value' => env('SESSION_LIFETIME'),
                    'um' => 'minutes'
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            // Laravel Cookie Consent
            $COOKIE_CONSENT_NAME => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            $COOKIE_CONSENT_NAME.'_statistics' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            $COOKIE_CONSENT_NAME.'_marketing' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            $COOKIE_CONSENT_NAME.'_functions' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            // Insert your necessary cookie here
        ],
        'statistics' => [
            // Insert your statistics cookie here
        ],
        'marketing' => [
            // Insert your marketing cookie here
        ],
        'functional' => [
            // Insert your functional cookie here
        ],
    ]
];
