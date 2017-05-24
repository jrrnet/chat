<?php

    class ajaxController extends controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {  

             $dados = array();         
        }
        
        public function getChamado() {
            $dados = array();
            
            $c = new Chamados();
            $dados['chamados'] = $c->getChamados();
            
            echo json_encode($dados);
        }
        
    }