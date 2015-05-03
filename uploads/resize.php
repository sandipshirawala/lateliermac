<?php
$dh1 = opendir('.');
while (false !== ($directory = readdir($dh1))) {
    if(in_array($directory, ['..', '.', 'resize.php']))
        continue;
    //echo $directory.PHP_EOL;
    $dh  = opendir($directory);
    while (false !== ($filename = readdir($dh))) {
        if(!is_dir($filename))
        {
            $filename = $directory.DIRECTORY_SEPARATOR.$filename;
            $percent = 0.3;

            // Calcul des nouvelles dimensions
            list($width, $height) = getimagesize($filename);
            $new_width = $width * $percent;
            $new_height = $height * $percent;

            // Redimensionnement
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($image_p, $filename, 100);
        }
    }
}
?>
