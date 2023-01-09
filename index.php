<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->


<?php
    include 'buscarId.php';    
    include 'config.php';

//echo 'estoy index.php'; exit;
//echo DB_NAME; exit;

?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>FAE - Military Profile</title>
        <link rel="shortcut icon" type="image/png" href="%PUBLIC_URL%/assets/icon/favicon.png" />
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
        <header class="airforce-header">
            
            <div class="airforce-logo">
                    <img src="./Air_Force.png" width="75">
            </div>
            <div class="airforce-text">
                <h1>FUERZA AÉREA ECUATORIANA - BASE AÉREA MARISCAL SUCRE</h1>
            </div>
        </header>
        
        
        <div class="container">
            <div class="profile-img">
                <div class="idtext">
                        <label>Identificación</label>
                        <input type="text" name="txtIdentification" required>
                            <button name="btnBuscarId">Buscar</button>            
                </div>
                <div class="front-face-img">
                    <div class="rostro">
                        <img height="375" width="300" src="data:image/jpeg;base64,<?php echo base64_encode($imagen);?>" >
                    </div>
                </div>
                
            </div>
            
           
            <div class="container-info">
                <div class="personal-info">
                    <h3>Información Personal</h3>
                    
                        <p class="block">
                            <label>Nombres:</label>
                            <input type="text" name="name" value="<?php echo $nombre?>" readonly>

                        </p>
                        <p>
                            <label>Cédula:</label>
                            
                            <input type="text" name="id_card" value="<?php echo $cedula?>" readonly>
                        </p>
                       
                        <p>
                            <label>Sexo:</label>
                            <input type="text" name="gender" value="<?php echo $sexo?>">
                        </p>
                        <p>
                            <label>Dosis Vac. C-19:</label>
                            <input type="text" name="car_id" value="<?php echo $dosis?>" readonly>
                        </p>
                       
                    
                </div>
                <div class="military-info">
                    <h3>Información Militar</h3>
                    
                        <p>
                            <label>Id Militar:</label>
                            <input type="text" name="military_id" value="<?php echo $idmil?>" readonly >
                        </p>
                        <p>
                            <label>Grado:</label>
                            <input type="text" name="rank" value="<?php echo $grado?>" readonly>
                        </p>
                        <p>
                            <label>Fuerza:</label>
                            <input type="text" name="force" value="<?php echo $fuerza?>" readonly>
                        </p>
                        <p>
                            <label>Reparto:</label>
                            <input type="text" name="military_base" value="<?php echo $reparto?>" readonly>
                        </p>
                        <p>
                            <label>Departamento:</label>
                            <input type="text" name="department" value="<?php echo $departamento?>" readonly>
                        </p>
                        <p>
                            <label>Estatus:</label>
                            <input type="text" name="status" value="<?php echo $estatus?>" readonly>
                        </p>
                    
                </div>
                <div class="safety-info">
                    <h3>Información de Seguridad</h3>
                    
                        <p>
                            <label>Área de acceso:</label>
                            <input type="text" name="area" value="<?php echo $area?>" readonly>
                        </p>
                        <p>
                            <label>Vigencia</label>
                            <input type="text" name="expiring" value="<?php echo $vigencia?>" readonly>
                        </p>
                        <p>
                            <label>Autorización:</label>
                            <input type="text" name="car" value="<?php echo $autorizacion?>" readonly>
                        </p>
                        <p class="block">
                            <label>Observación:</label>
                            <textarea name="message" rows="1" readonly> <?php echo $observacion?> </textarea>
                        </p>
                    
                </div>
                <div class="more-info">
                        <button >
                            Más detalles 
                        </button>
                </div>
                <div class="new-info">
                        <button >
                            Nuevo
                        </button>
                </div>
            </div>
        </div>
        </form>
    </body>

</html>
