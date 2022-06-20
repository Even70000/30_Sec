<?php
class Vragen extends Database{
    

    Public Function getVragen(){
        $query = "SELECT * FROM namen ORDER BY RAND() LIMIT 5";
        $stmt  = Database::getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }
}