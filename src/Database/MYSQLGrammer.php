<?php

namespace Src\Database;

use PDO;
use PDOException;

class MYSQLGrammer extends Database
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        
        try {

            if (isset($this->con['db_driver'], $this->con['db_host'], $this->con['db_database'], $this->con['db_username'], $this->con['db_password'])) {
                
                $this->db = new PDO("{$this->con['db_driver']}:host={$this->con['db_host']};dbname={$this->con['db_database']}", $this->con['db_username'], $this->con['db_password']);

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } else {
                
                die("Kerakli ma'lumotlar mavjud emas!");
            }
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function connect()
    {
        return $this->db;
    }
}
