<?php

$file = 'invoice.pdf';
$file = __DIR__.'/../Temp/' . $file;   
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers 
header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="'. basename($file) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));

readfile($file);

exit;

?>