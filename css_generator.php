<?php
include './my_scandir.php';

function scandir_option($dir_path, $my_scandir, &$array_img_path)
{
    if ($my_scandir == false) {
        if (is_dir($dir_path)) {
            my_recursive_scandir($dir_path, $array_img_path);
        } else {
            throw new Exception("le dossier n'existe pas.\n");
        }
    } else {
        my_scandir($dir_path, $array_img_path);
    }
}

function css_generator($argv)
{
   
    $dir_path = end($argv);
	$my_scandir = true;
	$array_img_path = [];
    

}

css_generator($argv);
