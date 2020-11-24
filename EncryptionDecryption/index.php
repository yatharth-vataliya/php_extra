<?php

// var_dump(openssl_get_cipher_methods());

require_once 'vendor/autoload.php';

use Crypto\{Config,ConfigData,Encrypt,Decrypt};
// var_dump(Config::generateConfigFile());

$cipher_text = Encrypt::encryptData('i love you komal','yatharth');
echo $cipher_text;

echo Decrypt::decryptData($cipher_text,'yatharth');
