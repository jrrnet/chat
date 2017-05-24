<?php

    class chatController extends controller {

        public function __construct() {
            parent::__construct();			
			
        }

        public function index() {  

             $dados = array(); 
             
             if (isset($_GET['id']) && !empty($_GET['id'])) {
                 $id = addslashes($_GET['id']);
                 
                 $c = new Chamados();
                 $c->updateStatus($id, 1);
             }             

            $this->loadTemplate('chat', $dados);
        }
        
    }