<?php

namespace Amit73\Mvc\core;


class DB{
    public $connection;
    public $sql;
    public static $tablepro;
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","amit");
    }
    public static function table($table){
        self::$tablepro = $table;
         return new static;
    }
    public function select(string $columns = "*"){
        $table = self::$tablepro;
        $this->sql = "SELECT $columns FROM `$table`";
        return $this;
    }

    public function delete(string $table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function insert(string $table,array $data){
        $columns  = "";
        $values  = "";
        foreach($data as $key => $value){
            $columns .= " `$key` ,";
            $values .= "'$value' ,";
        }
        $columns =  rtrim($columns,",");
        $values =  rtrim($values,",");

        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $this;
    }

    public function update(string $table,array $data){
        $row = "";
        foreach($data as $key => $value){
            $row .= "`$key` = '$value',";
        }

        $row = rtrim($row,",");
        $this->sql = "UPDATE `$table` SET $row";
        return $this;
    }
    public function where(string $column,string $operator,string $value){
        $this->sql .= " WHERE `$column` $operator '$value'";
        return $this;
    }

    public function all(){
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function excute(){
         mysqli_query($this->connection, $this->sql);
        return mysqli_affected_rows($this->connection);
    }
    public function first(){
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_assoc($query);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}