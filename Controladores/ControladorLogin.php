<?php



if (!empty($_POST["IniciarSesion"])) {

    include("db.php");

    if(!$conexion){
        echo "<div align='center' class='alert alert-danger'>Conexion a la base de datos fallida </div>";
    }else{
        if ((!empty($_POST["Usuario"])) and (!empty($_POST["Contraseña"]))) {
            $User=$_POST["Usuario"];
            $Pass=$_POST["Contraseña"];
            
            $query="select * from usuarios where Name='$User' and Password='$Pass'";

            $resultado = mysqli_query($conexion,$query);

            if (!empty($Datos = $resultado->fetch_array())){
                /* LLamar al index.php*/
            }else{
                echo "<div align='center' class='alert alert-danger'>Usuario o contraseña incorrecto</div>";
            }
            
            /*$Datos = $resultado->fetch_array();

            echo $Datos[0] . $Datos[1];*/

        } else {
            echo "<div align='center' class='alert alert-danger'> Campos vacíos </div>";
        }
    }
}


?>