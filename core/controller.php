<?php
/**
 * Controller base inicial da aplica��o
 * User: JRNET
 * Date: 21/05/2017
 * Atualizado com algumas modifica��es a string de conex�
 * com o banco foi removida
 */
	class controller {

		protected $db;

		public function __construct() {
			global $config;
		}
		
		public function loadView($viewName, $viewData = array()) {
			extract($viewData); // Transforma os dados do Array em variaveis
			include 'views/'.$viewName.'.php';
		}
		// Metodo Load Template e a estrutura do site
		public function loadTemplate($viewName, $viewData = array()) {
			include 'views/template.php';
		}

		public function loadViewInTemplate($viewName, $viewData) {
			extract($viewData);
			include 'views/'.$viewName.'.php';
		}

	}