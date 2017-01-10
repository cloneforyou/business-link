<?php

    include(__DIR__.'/config.local.php');  

    define('PERCH_LICENSE_KEY', 'R21610-ACQ543-ARQ766-BMA261-DEV017');
    define('PERCH_EMAIL_FROM', 'info@blueocto.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Caroline Hagan');

    define('PERCH_LOGINPATH', '/_admin');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'Europe/London');