<?php
  $tokens = [];

  function generateToken($user){
    global $tokens;

    // Untuk mengenerate random string sebagai token
    $token =  bin2hex(random_bytes(16));

    // Untuk Menambahkan Token kedalam array
    $tokens[$user][] = $token;

    if(count($tokens[$user]) > 10 ){
      array_shift($tokens[$user]);
    }

    return $token;
  }

  function verifyToken($user, $token){
    global $tokens;

    // Untuk mengecek apakah user memiliki token yang sesuai
    if(isset($tokens[$user]) && in_array($token, $tokens[$user])){
      unset($tokens[$user][array_search($token, $tokens[$user])]);
      return true;
    }

    return false;

  }

  // contoh penggunaanya 
  $user = "Alex";

  // Untuk generate token user yaitu alex
  $token1 = generateToken($user);
  $token2 = generateToken($user);

  echo "Token 1 : $token1\n";
  echo "Token 2 : $token2\n";

  // verifikasi Token 
  $isValidToken1 = verifyToken($user, $token1);
  $isValidToken2 = verifyToken($user, $token2);

  echo "Token 1 Valid: " . ($isValidToken1 ? "true" : "false") . "\n";
  echo "Token 2 Valid: " . ($isValidToken2 ? "true" : "false") . "\n";

?>