<?php
    if( !empty($_POST) ){
     //print_r( $_POST );
       // echo "<hr/>";
        $txt_id = utf8_decode($_POST["txt_id"]);
        $txt_carne = utf8_decode($_POST["txt_carne"]);
        $txt_nombre = utf8_decode($_POST["txt_nombre"]);
        $txt_apellido = utf8_decode($_POST["txt_apellido"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $txt_gmail = utf8_decode($_POST["txt_gmail"]);
        $txt_ts = utf8_decode($_POST["txt_ts"]);
        $txt_fn = utf8_decode($_POST["txt_fn"]);
    include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
        $sql = "INSERT INTO estudiantes(id_estudiante,carne,nombre,apellido,direccion,telefono,gmail,tipo_sangre,fecha_nacimiento,) VALUES ('". $txt_id ."','". $txt_carne ."','". $txt_nombre ."','". $txt_apellido ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_gmail ."',". $txt_ts .",'". $txt_fn ."');";
        }
        if( isset($_POST['btn_modificar'])  ){
            $sql = "update estudiantes set id='". $txt_id ."',nombre='". $txt_nombre ."',apellido='". $txt_apellido ."',direccion='". $txt_direccion ."',telefono='". $txt_telefono ."',gmail='". $txt_gmail ."',tipo_sangre=". $txt_ts .",fecha_nacimiento=". $txt_fn.";";
        }
        if( isset($_POST['btn_eliminar'])  ){
            $sql = "delete from estudiantes  where id_estudiante = ". $txt_id.";";
        }
        if ($db_conexion->query($sql)===true){
            $db_conexion->close();
            header('Location: /empresa_2021');
            //header('Location: index.php');
            }else{
            $db_conexion->close();
        }
    }
?>
