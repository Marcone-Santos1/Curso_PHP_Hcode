<?php

spl_autoload_register(function($nomeClasse)
{

    $dirClass = "class";
    
    // filename seria o caminho até tal file ou directory
    // DIRECTORY_SEPARATOR = / ou \
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse.".php";

    if (file_exists($filename)) {

        require_once($filename);

    }

});