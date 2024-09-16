<?php

// Write a PHP script, to check whether the page is called from 'https' or 'http'.

// var_dump($_SERVER);

if (!empty($_SERVER['HTTPS'])) {
    // Display a message if HTTPS is enabled
    echo 'https is enabled';
  } else {
    // Display a message if HTTPS is not enabled, followed by a newline character
    echo 'http is enabled' . "\n";
  }