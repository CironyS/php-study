<?php
spl_autoload_register(function($class){
    echo '类名' . $class . '<br/>';
});