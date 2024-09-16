<?php
$string = 'ErraSoft';

$segment1 = substr($string, 0, 2);  // 'Er'
$segment2 = substr($string, 2, 2);  // 'ra'
$segment3 = substr($string, 4, 2);  // 'So'
$segment4 = substr($string, 6, 2);  // 'ft'

$result = $segment1 . '/' . $segment2 . '/' . $segment3 . '/' . $segment4;

echo $result;
