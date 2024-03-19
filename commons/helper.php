<?php
    // File khai bao cac ham
    if(!function_exists('require_file')){
        function require_file($pathFoler){
            $files=array_diff(scandir($pathFoler),['.','..']);

            foreach($files as $file){
                require_once $pathFoler . $file;
            }
        }
    }
    if(!function_exists('debug')){
        function debug($data){
            echo "<pre>";
            print_r($data);
            die;
        }
    }
?>