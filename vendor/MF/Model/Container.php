<?php

namespace MF\Model;

use App\Connection;

class Container
{
    /**
     * Método da classe que retorna um objeto da classe Model
     *
     * @param string $model
     * @return object
     */
    public static function getModel($model)
    {
        $class = "\\App\\Models\\" . ucfirst($model);

        // Instância do PDO (Conexão)
        $conn = Connection::getDb();
        
        return new $class($conn);
    }
}
