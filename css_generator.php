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

function sprite_name($argv, $key, $value, &$array_name)
{
	if ($value == '-i')
	{
		$array_name['sprite'] = $argv[$key + 1];
	}
	elseif (substr($value, 0, 15) == '--output-image=')
	{
		$array_name['sprite'] = substr($argv[$key], 15);
	}
}

function css_name($argv, $key, $value, &$array_name)
{
	if ($value == '-s')
	{
		$array_name['css'] = $argv[$key + 1];
	}
	elseif (substr($value, 0, 15) == '--output-style=')
	{
		$array_name['css'] = substr($argv[$key], 15);
	}
}

function css_generator($argv)
{
   
    $dir_path = end($argv);
	$my_scandir = true;
	$array_img_path = [];
    

}

css_generator($argv);
