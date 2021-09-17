<?php

include("conexion.php");

    if(isset($_POST['enviar'])){
        if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 ){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $asunto = trim($_POST['asunto']);
            $msg = trim($_POST['msg']);
            $consulta = "INSERT INTO datos(nombre, email, asunto, mensaje)
            VALUES ('$name','$email','$asunto','$msg')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                ?>
                    <h3>Registrado</h3>
                <?php
            } else{
                ?>
                <h3>Error</h3>
                <?php
            }
        }
    }
?>