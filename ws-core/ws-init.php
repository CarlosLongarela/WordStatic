<?php
spl_autoload_register(function ($class) {//register autoload class
	include 'ws-core/ws-class/' . $class . '.class.php';
});

spl_autoload_register(function ($class) {//register autoload trait
	include 'ws-core/ws-class/' . $class . '.trait.php';
});
