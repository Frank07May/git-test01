<?php
//echo 'estoy buscarId.php'; exit;
    //include './utilitaries/utilitaries.php';
    include 'config.php';
    //$server="localhost";
    //$user="root";
    //$password="";
    //$database="idpersonal";

        $server=DB_HOST;
        $user=DB_USER;
        $password=DB_PASS;
        $database=DB_NAME;

    $conn= new mysqli($server,$user,$password,$database);
    /* INICIALIZACIÓN DE VARIABLES TOAMDAS DE LA BASE DE DATOS*/
    $busqueda="";
    $imagen="";
    $nombre="";
    $cedula="";
    $sexo="";
    $dosis="";
    $idmil="";
    $grado="";
    $fuerza="";
    $reparto="";
    $departamento="";
    $estatus="";
    $area="";
    $vigencia="";
    $autorizacion="";
    $observacion="";
    $sql="";
    /**/
    if(isset($_POST['btnBuscarId'])){
        $busqueda= $_POST['txtIdentification'];
        $cedulatxt=$busqueda;
        
        
            $sql="SELECT * FROM information WHERE cedula='$cedulatxt'";
            $resultado=mysqli_query($conn, $sql);
            if($resultado!=null){
                $consulta= mysqli_fetch_array($resultado);
                echo $consulta[2];
                $nombre= $consulta[1];
                $cedula=$consulta[2];
                $sexo=$consulta[3];
                $dosis=$consulta[4];
                $idmil=$consulta[5];
                $grado=$consulta[6];
                $fuerza=$consulta[7];
                $reparto=$consulta[8];
                $departamento=$consulta[9];
                $estatus=$consulta[10];
                $area=$consulta[11];
                $vigencia=$consulta[12];
                $autorizacion=$consulta[13];
                $observacion=$consulta[14];
                $imagen=$consulta[15];
            }
        }
         
?>