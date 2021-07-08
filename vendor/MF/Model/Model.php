<?php

namespace MF\Model;

use PDO;

abstract class Model
{
    protected $db;

    /**
     * Método Construtor da classe
     *
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}