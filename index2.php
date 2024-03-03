<?php declare(strict_types=1);

session_start( [ 
  'name' => '__Secure-PHPSESSID',

  'cookie_lifetime' => 0,
  'cookie_path' => '/',
  'cookie_domain' => $_SERVER['HTTP_HOST'],
  'cookie_secure' => true,
  'cookie_httponly' => true,
  'cookie_samesite' => 'Strict',
] );

$_SESSION['count'] = ($_SESSION['count']?? 0)+1;
echo "Count: {$_SESSION['count']}<br>";