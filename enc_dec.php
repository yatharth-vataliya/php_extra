<?php
// echo "JUST STARTING THE GAME".PHP_EOL;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $plaintext = $_POST['plain_text'];
  $cipher = "aes-128-gcm";
  // $key = openssl_random_pseudo_bytes(3);
  // $key = $_POST['key'];
  $key = 'yatharth';
  if (in_array($cipher, openssl_get_cipher_methods()))
  {
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    //store $cipher, $iv, and $tag for decryption later
    echo $ciphertext."<br/>";
    echo "<br/>";
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv,$tag);
    var_dump($original_plaintext);
  }
}else{

}

?>
<html>
<head>
  <title>ENC AND DEC</title>
</head>
<body>
  <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="plain_text" placeholder="Enter plain text" />
    <input type="password" name="key" placeholder="Enter key please" />
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>
