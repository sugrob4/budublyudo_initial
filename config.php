<?php
defined('POVAR') or exit('Access denied');

define('CONTROLLER','core/controller');

define('MODEL','core/model');

define('VIEW','template/default/');

define('LIB','lib');

define('SITE_URL','/');

define('QUANTITY',3);

define('QUANTITY_LINKS','3');

define('UPLOAD_DIR','images/');

define('HOST','localhost');

define('USER','');

define('PASSWORD','');

define('DB_NAME','povaryonok');

define('IMG_WIDTH',200);

$conf = array(
              'styles' => array(
                                'bootstrap-3.1.1.min.css',
                                'font-awesome-4.0.3.min.css',
                                'css/normalize.css',
                                'css/style.css'
                                ),
              'scripts' => array(
                                'js/jquery-2.1.3.min.js',
                                'js/functions.js',
                                'bootstrap.min.js'
                                ),
              'styles_admin' => array(
                                      'style.css'
                                      ),
              'scripts_admin' => array(
                                       
                                       ),
              );