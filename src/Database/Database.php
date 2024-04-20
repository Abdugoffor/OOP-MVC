<?php

namespace Src\Database;

use Dotenv\Dotenv;

class Database
{
    public $con = [];

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__);

        $dotenv->load();

        $this->con['db_driver'] = $_ENV['DB_DRIVER'];

        $this->con['db_host'] = $_ENV['DB_HOST'];

        $this->con['db_database'] = $_ENV['DB_DATABASE'];

        $this->con['db_username'] = $_ENV['DB_USERNAME'];

        $this->con['db_password'] = $_ENV['DB_PASSWORD'];

        // return $this->con;
    }

    public function con()
    {
        return $this->con;
    }
}
