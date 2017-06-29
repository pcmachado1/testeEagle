<?php

define('DB_NAME', 'eagle_user');
define('DB_USER', 'eagle_user');
define('DB_PASSWORD', 'eagle_user');
define('DB_HOST', 'localhost');

define('NOME_DO_CANDIDATO', 'Seu Nome');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    
if ( !defined('BASEURL') )
    define('BASEURL', '/');
    
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');
    
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

