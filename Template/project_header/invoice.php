<?php
$filename = 'invRef.pdf';
$filepath = dirname(__DIR__, 3) . '/data/files/Invoicer/' . $file; // of course find the exact filename....        
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers 
header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filepath));

file_get_contents($filepath);

exit;
?>