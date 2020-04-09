<?php
// script.js
header('Content-Type: text/javascript'); // Tell browser to treat file as Javascript

// $files  = array(
//     'datatables.min.js',
//     'custom.js',
//     'ajax.js'
// );
$files  = array(
    'custom.js',
    'ajax.js'
);
foreach($files as $file){
    // Import each file
    echo file_get_contents($file).PHP_EOL;
}