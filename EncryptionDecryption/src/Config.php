<?php
namespace Crypto;
use Exception;
class Config{

  private static $cipher = "aes-256-cbc";
  private static $key = "KOMAL&YATHARTH";

  public static function generateConfigFile(){

    if (in_array(self::$cipher, openssl_get_cipher_methods()))
    {
      $ivlen = openssl_cipher_iv_length(self::$cipher);
      $iv = openssl_random_pseudo_bytes($ivlen);
    }else{
      throw new Exception("No valid cipher is given");
    }
    $cipher = self::$cipher;
    $key = self::$key;
    $iv = addslashes($iv);
    $config_file = <<<FILE
<?php
namespace Crypto;
    class ConfigData{
      public const CIPHER = '{$cipher}';
      public const KEY = '{$key}';
      public const IV = '{$iv}';
    }
FILE;

    $file = fopen(__DIR__.'/ConfigData.php','w+');
    fwrite($file,$config_file);
    fclose($file);

    return true;

  }

  public static function destroyConfigFile(){
    if(unlink(__DIR__.'/ConfigData.php')){
      return true;
    }else{
      return false;
    }
  }

}
