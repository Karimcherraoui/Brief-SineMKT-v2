<?php

//load config 

require_once 'config/Config.php';

// load libraries

// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';


// Autoload Core Libraries

spl_autoload_register(function ($classname) {
    require_once 'libraries/' . $classname . '.class.php';

});