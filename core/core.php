<?php
/**
 * Objeto de fundamento do sistema core.
 * Verifica o que foi acessado no Controller
 * Verifica qual Action foi usada e faz um Run na aplicação
 * User: JRNET
 * Date: 21/05/2017
 * Atualizado com algumas modificações
 */
class Core {

	public function run() {
        $url = '/'.(isset($_GET['q'])?$_GET['q']:'');

		$params = array();
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url); // Divide cada parte pela barra
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && $url[0] != '/') {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		if(!file_exists('controllers/'.$currentController.'.php')) {
			$currentController = 'notFoundController';
			$currentAction = 'index';
		}

		$c = new $currentController();

		if(!method_exists($c, $currentAction)) {
			$currentAction = 'index';
		}

		call_user_func_array(array($c, $currentAction), $params);

	}

}