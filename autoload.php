<?php 

session_start();

require_once './boot.php';

spl_autoload_register('autoload');

function autoload($class_name){
	$array_paths = array(
		'database/',
		'app/class/',
		'models/',
		'controllers/'
	);

	$parts = explode('\\',$class_name);
	$name = array_pop($parts);

	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}

    // function __autoload($file)
    // {
    //     $array_paths = array(
    //         'database/',
    //         'app/classes/',
    //         'models/',
    //         'controllers/'
    //     );
    //     require './'..$file.'.php';
    // }

}