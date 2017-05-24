<?php
/**
 * Começar com um AutoLoad das pastas Controller, Models, Core
 * User: JRNET
 * Date: 21/05/2017
 * Time: 22:37
 * Atualizado com algumas modificações no INDEX
 *
 */
 
	session_start();
	require 'config.php';
	// AutoLoad
	spl_autoload_register(function ($class){
		// Verifica se existe um controller 
		// Substituiu o strpos($class, 'Controller') > -1)
		if(file_exists('controllers/'.$class.'.php')) {
				require_once 'controllers/'.$class.'.php';
		} elseif(file_exists('models/'.$class.'.php')) {
				require_once 'models/'.$class.'.php';
		} elseif(file_exists('core/'.$class.'.php')) {
				require_once 'core/'.$class.'.php';
		}
	});

	$core = new Core();
	$core->run();
