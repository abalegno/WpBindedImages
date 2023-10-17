<?php

$Path = '../public_html/';
$Directory = new RecursiveDirectoryIterator($Path);
$Iterator = new RecursiveIteratorIterator($Directory);
$Regex = new RegexIterator($Iterator, '/^.+(.jpe?g|.png|.gif|.bmp)$/i', RecursiveRegexIterator::GET_MATCH);

echo 'TOTAL in ' . $Path . ': ' . iterator_count($Regex) . '<br><br>';

foreach ($Regex as $name => $Regex) {
    if (!is_image($name)) {
        echo $name . ' = MALWARE' . "<br>";
        //  ****** If you want to put the array into a .txt file, comment the previous echo and uncomment the next 5 lines.
        //$string = $name . ' = MALWARE' . "\r\n";
        //$file = 'xxx.txt';
        //$current = file_get_contents($file);
        //$current .= $string;
        //file_put_contents($file, $current);
    } else {
        //  ****** If you want to list all the 'clean' images files
        //echo $name . ' = CLEAN' . "<br>";
    }
}

die('<br>END!');

function is_image($path)
{
    $a = getimagesize($path);
    $image_type = $a[2];
    if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
        return true;
    }
    return false;
}
