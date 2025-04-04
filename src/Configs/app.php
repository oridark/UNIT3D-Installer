<?php

use App\Installer\Database\MySqlSetup;

return [
    'min_php_version' => '8.2',

    'repository' => 'https://github.com/HDInnovations/UNIT3D-Community-Edition',

    'database_installers' => [
        /**
         * Map to the Installer class
         */
        'MySql' => MySqlSetup::class,
    ],

    /*
     * Dynamically set configuration defaults and placeholders
     *
     * These do NOT need policy classes
     */

    /* Main Server */
    'server_name' => 'u3d',
    'ip' => '152.53.237.238',
    'hostname' => 'mxrc.tech',
    'ssl' => true,
    'owner' => 'oggrr',
    'owner_email' => 'moviecollections.fun@gmail.com',
    'password' => '13056261333as',

    /* Database */
    'database_driver' => 'MySql',

    'db' => 'u3d',
    'dbuser' => 'tjc',
    'dbpass' => '13056261333as',
    'dbrootpass' => '13056261333as',

    /* Mail */
    'mail_driver' => 'smtp',
    'mail_host' => 'smtp.gmail.com',
    'mail_port' => '587',
    'mail_username' => 'moviecollections.fun@gmail.com',
    'mail_password' => 'pmzvwilgmmakdzmy',
    'mail_from_name' => 'moviecollections',

    /* Chat */
    'echo-port' => '8443',

    /* API Keys */
    'tmdb-key' => '394403946ff4fbf535ebe64eee01c669',
];
