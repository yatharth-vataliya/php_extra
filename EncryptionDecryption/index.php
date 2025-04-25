<?php

// var_dump(openssl_get_cipher_methods());

require_once 'vendor/autoload.php';

use Crypto\Config;
use Crypto\Decrypt;
use Crypto\Encrypt;

// var_dump(Config::generateConfigFile());

$cipher_text = Encrypt::encryptData('Live your life today there is no tomorrow', 'yatharth');
echo $cipher_text;

echo Decrypt::decryptData($cipher_text, 'yatharth');
