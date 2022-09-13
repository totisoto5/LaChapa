<?php

if (!empty($_POST["CrearCuenta"])) {


    include("db.php");

    if(!$conexion){
        echo "<div align='center' class='alert alert-danger'>Conexion a la base de datos fallida </div>";
    }else{
        if ((!empty($_POST["Usuario"])) and (!empty($_POST["Contraseña1"])) and (!empty($_POST["Contraseña2"]))) {
            $User=$_POST["Usuario"];
            
            if ($_POST["Contraseña1"] == $_POST["Contraseña2"]){
                $Pass1=$_POST["Contraseña1"];
                $Pass2=$_POST["Contraseña2"];

                $query="INSERT INTO usuarios (Name, Password) VALUES ('$User','$Pass1')";
                
                try{
                    $resultado = mysqli_query($conexion,$query);
                    header("location: Login.php");
                }catch(Exception $ex){
                    echo "<div align='center' class='alert alert-danger'>El usuario ingresado no está disponible</div>";
                }
               
            }else{
                echo "<div align='center' class='alert alert-danger'>Las contraseñas deben coincidir</div>";
            }

        } else {
            echo "<div align='center' class='alert alert-danger'> Debe llenar todos los campos </div>";
        }
    }
}


?>