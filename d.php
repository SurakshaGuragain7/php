<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');

$user_CSV[0] = array('Name', 'Phone', 'Email','Address');
$user_CSV[1] = array('Suraksha', 1212, 'as@gmail.com','ktm');
$user_CSV[2] = array('Abvd', 12134, 'asads@gmail.com','dkt');
$user_CSV[3] = array('Suraksha', 1212, 'as@gmail.com','ktm');

$fp = fopen('php://output', 'wb');
foreach ($user_CSV as $line) {
   fputcsv($fp, $line, ',');
}
fclose($fp);
?>