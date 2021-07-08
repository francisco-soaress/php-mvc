<?php

namespace App;

use PDO;
use PDOException;
use PDOStatement;

class Connection
{
    /**
     * Método da classe que retorna a conexão
     *
     * @return PDOStatement
     */
    public static function getDb()
    {
        try {
            $conn = new PDO(
                "mysql:host=localhost;dbname=udemy_mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;
        } catch (PDOException $e) {
            echo "
                <div style='color: #fcb8b8; background: #d12121; border:1px solid #7C1515; padding: 10px; font-family: Calibri, sans-serif; border-radius: 5px;'>
                    <strong style='color: #ffffff'>Erro:</strong> {$e->getMessage()}<br>
                    <strong style='color: #ffffff'>Arquivo:</strong> {$e->getFile()}<br>
                    <strong style='color: #ffffff'>Linha:</strong> {$e->getLine()}<br>
                    <strong style='color: #ffffff'>Código:</strong> {$e->getCode()}
                </div>    
            ";
            die;
        }
    }
}
