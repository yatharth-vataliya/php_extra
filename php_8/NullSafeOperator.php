<?php

// PHP version 7.x

$country =  null;

if ($session !== null) {
  $user = $session->user;

  if ($user !== null) {
    $address = $user->getAddress();
 
    if ($address !== null) {
      $country = $address->country;
    }
  }
}

// PHP version 8.0

$country = $session?->user?->getAddress()?->country;

// NullSafe Operator means you can directly check for variable has value or not. You can see the difference in above example