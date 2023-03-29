<?php

class Db {

    public $conn,$tableName;

    function __construct($tableName)
    {
        $hostname = "localhost";
        $username = "hhz";
        $password = "asdffdsa";
        $database = "san_kyi_tar";
        $this->conn = mysqli_connect($hostname, $username, $password,$database);

        $this->tableName = $tableName;
    }

    public function create(array $data){
        // "insert into users ($columns) values ($values);"
        // ('hein htet zan','hhz@gmail.com','male','no 48, shan kone st, sanchaung')

        $values = "'".join("','",array_values($data))."'";

        $sql = "INSERT INTO ".$this->tableName." ";
        $sql .= "(".join(",",array_keys($data)).") VALUES ";
        $sql .= "($values)";

        mysqli_query($this->conn,$sql);

        return $this->conn->insert_id;
    }

    public function index():array {
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn,$sql);
        $rows = [];
        while($row = mysqli_fetch_object($query)){
            $rows[] = $row;
        }

        return $rows;
    }

    public function show(int $id):object{
        $sql = "SELECT * FROM $this->tableName WHERE id = $id";
        $query = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_object($query);
        return $row;
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
}