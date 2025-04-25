<?php

/**
 * Generate a pair of RSA keys (private and public).
 *
 * @return array Associative array with 'private_key' and 'public_key'.
 */
function generateKeys()
{
    // Key generation settings
    $config = [
        'private_key_bits' => 2048,
        'private_key_type' => OPENSSL_KEYTYPE_RSA,
    ];

    // Generate a new private-public key pair
    $res = openssl_pkey_new($config);

    // Extract private key
    openssl_pkey_export($res, $privateKey);

    // Extract public key
    $keyDetails = openssl_pkey_get_details($res);
    $publicKey = $keyDetails['key'];

    return [
        'private_key' => $privateKey,
        'public_key' => $publicKey,
    ];
}

/**
 * Encrypt a message using the public key.
 *
 * @param  string  $publicKey  The public key for encryption.
 * @param  string  $message  The plaintext message to encrypt.
 * @return string The encrypted message (base64 encoded).
 */
function encryptMessage($publicKey, $message)
{
    openssl_public_encrypt($message, $encrypted, $publicKey, OPENSSL_PKCS1_OAEP_PADDING);

    return base64_encode($encrypted);
}

/**
 * Decrypt a message using the private key.
 *
 * @param  string  $privateKey  The private key for decryption.
 * @param  string  $encryptedMessage  The encrypted message (base64 encoded).
 * @return string The decrypted plaintext message.
 */
function decryptMessage($privateKey, $encryptedMessage)
{
    $encrypted = base64_decode($encryptedMessage);
    openssl_private_decrypt($encrypted, $decrypted, $privateKey, OPENSSL_PKCS1_OAEP_PADDING);

    return $decrypted;
}

// Example usage
$keys = generateKeys();
$privateKey = $keys['private_key'];
$publicKey = $keys['public_key'];

// Save keys to files (optional)
file_put_contents('private_key.pem', $privateKey);
file_put_contents('public_key.pem', $publicKey);

// Original message
$message = 'This is a secret message.';

// Encrypt the message using the public key
$encryptedMessage = encryptMessage($publicKey, $message);
echo 'Encrypted Message: '.$encryptedMessage.PHP_EOL;

// Decrypt the message using the private key
$decryptedMessage = decryptMessage($privateKey, $encryptedMessage);
echo 'Decrypted Message: '.$decryptedMessage.PHP_EOL;
