<?php
class Vragen extends Database{

    Public Function getVragen(){
        $query = "SELECT * FROM namen";
        $stmt  = Database::getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }
}