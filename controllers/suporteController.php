<?php

    class suporteController extends controller {

        public function __construct() {
            parent::__construct();
			
			// Mantem a sessão para o suporte
			$_SESSION['area'] = 'suporte';
        }

        public function index() {  

             $dados = array();          

            $this->loadTemplate('suporte', $dados);
        }
        
    }