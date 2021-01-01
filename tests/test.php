<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use pzinwai\SingaporeICValidator\SingaporeICValidator;

$result = SingaporeICValidator::validateNRIC("SXXXXXXXZ");

if ($result) {
  echo "It is a singapore IC.\n";
} else {
  echo "It is NOT a singapore IC.\n";
}