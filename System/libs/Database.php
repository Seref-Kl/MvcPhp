<?php

class Database extends PDO {
    public function __construct($dsn, $user, $password)
    {
        parent::__construct($dsn, $user, $password);
        $this->query("SET NAMES ´utf8´");
        $this->query("SET CHARACTER SET utf8");

    }
    public function select($sql, $array = array() , $fetchMode = PDO::FETCH_ASSOC){

       $sth = $this->prepare($sql);
       foreach ($array as $key => $value){
           $sth->bindValue($key, $value);
       }
       $sth->execute();
       return $sth->fetchAll($fetchMode);
    }
    public function insert($tableName,$data){
        $fieldKeys = implode(",", array_keys($data));
        $fieldValues =" \"" . implode("\", \"", array_values($data)) . "\"";

        $sql= "INSERT INTO  $tableName ($fieldKeys) VALUES ($fieldValues) ";
        $sth = $this->prepare($sql);
        //foreach ($data as $key => $value){
        //    $sth->bindValue(" :$key", $value);
        //}
        return $sth->execute();
    }
    public function update($tableName,$data,$where){
        $updateKeys = null;
        foreach ($data as $key => $value){
            $updateKeys .= $key."='".$value."',"; // değişikenleri stringle oluşturma
        }
         $updateKeys = rtrim($updateKeys, ",");
        $sql = "UPDATE $tableName SET $updateKeys WHERE $where";
        $sth = $this->prepare($sql);
        //foreach ($data as $key => $value){
        //    $sth->bindValue(" :$key", $value);
        //}
        return $sth->execute();
    }
    public function delete($tableName, $where ){
        $this->exec("DELETE FROM $tableName WHERE $where");

    }


}


?>