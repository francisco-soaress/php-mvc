<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model
{
    /**
     * Método da classe que retorna o SELECT de resultados em array
     *
     * @return query
     */
    public function getInfo()
    {
        $query = "SELECT titulo, descricao FROM tb_info";
        return $this->db->query($query)->fetchAll();
    }
}
