﻿<?php

    class clienteController extends controller {

        public function __construct() {
            parent::__construct();
			
			// Mantem a sessão para o cliente
			$_SESSION['area'] = 'cliente';
        }

        public function index() {  

             $dados = array();          

            $this->loadTemplate('cliente', $dados);
        }
        
    }