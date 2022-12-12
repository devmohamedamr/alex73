<?php



class db{

    public $connection;
    public $sql;
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","amit");
    }

    public function select(string $table,string $columns){
        $this->sql = "SELECT $columns FROM `$table`";
        return $this;
    }

    public function delete($table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function where($column,$operator,$value){
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
}