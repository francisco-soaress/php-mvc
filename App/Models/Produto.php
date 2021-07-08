<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model
{
    /**
     * Método da classe que retorna o SELECT de resultados em array
     *
     * @return query
     */
    public function getProdutos(){
        $query = "SELECT id, descricao, preco FROM tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}
