<?php

class Chamados extends model {
    
    public function getChamados() {
        // Um array para respostas
        $array = array();
        
        // Consulta no banco os chamados
        $sql = "SELECT * FROM chamados WHERE status IN(0,1)";
        $sql = $this->db->query($sql);
        
        // Verifica se retornou algum chamado da tabela
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();            
        }
        
        // Um retorno para as respostas
        return $array;        
    }
    
    public function updateStatus($id, $status) {
        if(!empty($id) && !empty($status)) {
            $sql = "UPDATE chamados SET status = '$status' WHERE id = '$id'";
            $this->db->query($sql);
        }
    }
}

