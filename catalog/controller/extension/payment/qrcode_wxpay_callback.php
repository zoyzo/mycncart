<?php
// Version
define('VERSION', '2.0.0.2');

// Configuration
require_once('../../../../config.php');

date_default_timezone_set('PRC');

// Startup
require_once(DIR_SYSTEM . 'startup.php');

define('PAY_METHOD_CALLBACK', 'extension/payment/qrcode_wxpay/callback');
start('catalog');