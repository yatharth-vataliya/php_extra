<?php
namespace Crypto;
use Exception;

class Encrypt{

  public function __construct(){

  }

  public static function encryptData(?string $plaintext = null,?string $key = null) : string {
    if(!empty($plaintext)){
      $ciphertext = openssl_encrypt($plaintext, ConfigData::CIPHER, (!empty($key)) ? $key : ConfigData::KEY, $options=0, ConfigData::IV);
    }else{
      throw new \Exception("Plain text error thrown by program");
    }

    return $ciphertext;

  }

  public static function decryptData(?string $ciphertext = null,?string $key = null) : string {
    if(!empty($ciphertext)){
      $plaintext = openssl_decrypt($ciphertext, ConfigData::CIPHER, (!empty($key)) ? $key : ConfigData::KEY, $options=0, ConfigData::IV);
    }else{
      throw new \Exception("Cipher text  error thrown by program");
    }

    return $plaintext;

  }

}
