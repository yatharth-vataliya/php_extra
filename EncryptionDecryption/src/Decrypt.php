<?php

namespace Crypto;

class Decrypt
{
    public function __construct() {}

    public static function decryptData(?string $ciphertext = null, ?string $key = null): string
    {
        if (! empty($ciphertext)) {
            $plaintext = openssl_decrypt($ciphertext, ConfigData::CIPHER, (! empty($key)) ? $key : ConfigData::KEY, $options = 0, ConfigData::IV);
        } else {
            throw new \Exception('Cipher text  error thrown by program');
        }

        return $plaintext;

    }
}
