<?php
$cipher = 'aes-128-gcm';
$key = 'yatharth';
if (in_array($cipher, openssl_get_cipher_methods()))
{
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);
  // $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
  //store $cipher, $iv, and $tag for decryption later
  // echo $ciphertext."<br/>";
  echo "<br/>";
  $original_plaintext = openssl_decrypt('UL/wSq5CujPAf0EJJeMgQA==', $cipher, $key, $options=0, $iv,$tag);
  var_dump($original_plaintext);
}
?>
