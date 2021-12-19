<?php
    spl_autoload_register(function($class){
        $filename = $class.'.php';
        // echo $filename;
        if (!file_exists($filename)){
            return false;
        }

        include $class.'.php';
    });
?>

<!-- 
this autoload file is used to load the dependent class in the mail file when it is required. 
So we don't need to include them in the file additionaly. 
-->