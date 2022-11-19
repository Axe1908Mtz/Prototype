<?php
$conexion = mysqli_connect("localhost", "root", "", "bdreins");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$carrera = $_POST["carrera"];
$correoUTFV = $_POST["correoUTFV"];
$matricula = $_POST["matricula"];
$fecha = $_POST["fecha"];

if($_FILES["archivo1"]) {
    $nombre_base = basename($_FILES["archivo1"]["name"]);
    $nombre_final = date("d-m-y"). "-". date("H-i-s"). "-". $nombre_base;
    $ruta = "archivos/" . $nombre . "-". $apellidos ."-". $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo1"]["tmp_name"], $ruta);
   
   if($_FILES["archivo2"]) {
        $nombre_base2 = basename($_FILES["archivo2"]["name"]);
        $nombre_final2 = date("d-m-y"). "-". date("H-i-s"). "-". $nombre_base2;
        $ruta = "archivos/" . $nombre . "-". $apellidos ."-". $nombre_final2 ;
        $subirarchivo2 = move_uploaded_file($_FILES["archivo2"]["tmp_name"], $ruta);

        if($_FILES["archivo3"]) {
            $nombre_base3 = basename($_FILES["archivo3"]["name"]);
            $nombre_final3 = date("d-m-y"). "-". date("H-i-s"). "-". $nombre_base3;
            $ruta = "archivos/" .  $nombre . "-". $apellidos ."-". $nombre_final3;
            $subirarchivo3 = move_uploaded_file($_FILES["archivo3"]["tmp_name"], $ruta);

            if($_FILES["archivo4"]) {
                $nombre_base4 = basename($_FILES["archivo4"]["name"]);
                $nombre_final4 = date("d-m-y"). "-". date("H-i-s"). "-". $nombre_base4;
                $ruta = "archivos/" . $nombre . "-". $apellidos ."-". $nombre_final4;
                $subirarchivo4 = move_uploaded_file($_FILES["archivo4"]["tmp_name"], $ruta);
                
if($subirarchivo){
    $insertarSQL = "INSERT INTO reinscripcionestsu(nombre, apellidos, carrera, correoUTFV, matricula, fecha, archivo1, archivo2, archivo3, archivo4) VALUES ('$nombre','$apellidos','$carrera','$correoUTFV','$matricula','$fecha','$nombre_final','$nombre_final2','$nombre_final3','$nombre_final4')";
    $resultado = mysqli_query($conexion, $insertarSQL);
        if($resultado){
            echo"<script>alert ('Se ha enviado sus archivos'); window.location='index.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
             }
          }  
           
         }
   }
} else {
    echo "Error al subir los archivos";
}


?>