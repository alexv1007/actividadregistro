<?php, Recuperar e insertar datos include "conecta.php";
if[isset ($_POST['btn'])]{
    $Nombre=$conecta->Reel_scape_string($_POST['Nombre']);
    $Apellidos=$conecta->Reel_scape_string($_POST['Apellidos']);
    $Direccion=$conecta->Reel_scape_string($_POST['Direccion']);
    $Telefono=$conecta->Reel_scape_string($_POST['Telefono']);
    $Fecha=$conecta->Reel_scape_string($_POST['Fecha']);
    $Email=$conecta->Reel_scape_string($_POST['Email']);
    if($Nombre==" "||$Apellidos==" "||$Direccion==" "||$Telefono==" "||$Fecha==" "||$Email==" "){
        $Alerta="Alguno de los datos estan vacios";
    }
    else{
        $registro="INSERT INTO usuario(Nombre,Apellidos,Direccion,Telefono,Fecha,Email;)VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Fecha','$Email'");
        $registro=$conection->query($registro);
        if($registro)||{
            echo="REGISTRO EXITOSO";
        }else{
            echo="ERROR AL REGISTRARSE";
        }
    }
}
?>