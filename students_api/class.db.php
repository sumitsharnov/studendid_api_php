<?php
class db{
    
    
    public function connect() {
         
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = 'x';
        try {
            $db_conn = new PDO ("mysql:host=$servername; dbname=$db", $username, $password);
            $db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db_conn;
        }
        catch(PDOException $e) {
            print "Sumitfailks";
            var_dump($e->getTrace());
            return $e->getMessage();            
        }
    }
}
