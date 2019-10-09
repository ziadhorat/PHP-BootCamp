#!/usr/bin/env php
<?php
$url_to_image = 'https://www.42.fr/';
$my_save_dir = './';
$filename = basename($url_to_image);
$complete_save_loc = $my_save_dir . $filename;
file_put_contents($complete_save_loc, file_get_contents($url_to_image));
?>
