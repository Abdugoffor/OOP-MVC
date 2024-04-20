<?php

namespace Src\Database;

use PDO;

class Model extends MYSQLGrammer
{
    public function __construct()
    {
        parent::__construct();
    }


    public static function create($data)
    {
        $user = new static();
        $fillable = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        return $user->db->query("INSERT INTO {$user->table} ($fillable) VALUES ($values)");
    }

    public static function all()
    {
        $user = new static();
        return $user->db->query("SELECT * FROM {$user->table} order by id desc")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete(string $row, $value)
    {
        $user = new static();
        $stmt = $user->db->prepare("SELECT * FROM {$user->table} WHERE {$row} = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->rowCount();
    }

    public static function where(string $row, $k, $value)
    {
        $user = new static();
        $stmt = $user->db->prepare("SELECT * FROM {$user->table} WHERE {$row} {$k} :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function attempt($data)
    {
        $user = new static();
        $tel = $data['tel'];
        $pas = $data['pas'];

        $stmt = $user->db->prepare("SELECT id, name, tel FROM users WHERE tel = :tel AND pas = :pas");
        $stmt->execute([':tel' => $tel, ':pas' => $pas]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function validate($post)
    {
        $name = strlen($post['name']);
        $tel = strlen($post['tel']);
        $pas = strlen($post['pas']);

        if (($name > 2 or $name < 100) && ($tel == 70) && ($pas > 2 or $pas < 100)) {

            return $data = [
                'name' => htmlentities($post['name']),
                'tel' => htmlentities($post['tel']),
                'pas' => htmlentities(hash($post['pas'])),
            ];
        } else {

            return false;
        }
    }


    // protected function raw(string $query, $value)
    // {
    //     return $this->query($query, $value);
    // }

    // public function create(array $data)
    // {
    //     return $this->create($data);
    // }

    // public function read($columps = '*', $filter = null)
    // {
    //     return $this->read($columps, $filter);
    // }

    // public function update($id, $data)
    // {
    // }

    // public function delete($id)
    // {
    // }


}
