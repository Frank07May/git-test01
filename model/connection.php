<?php

class connection{
    
    public $server="";
    public $user="";
    public $password="";
    public $database="";
    public $conn="";


    public function connection() {
        
    }
    
    public function openConnection() {
        $server="localhost";
        $user="root";
        $password="";
        $database="idpersonal";
        $conn= new mysqli($server,$user,$password,$database);
        
        if($conn)
        {
            echo "Fallo la conexión";
        }
    }

    public function closeConnection() {
        mysqli_close($conn);
    }
    
    
    
}
   
?>