<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Pagina Web Prototype</title>
</head>
<body>
    <div class="cajafuera">
        <div class="formulariocaja">
            <div class="botondeintercambiar">
                <div id="btnvai"></div>
                 <button type="button" class="botoncambiarcaja" onclick="loginvai()" id="vaibtnlogin">TSU</button>
                 <button type="button" class="botoncambiarcaja" onclick="registrarvai()" id="vaibtnregistrar">ING</button>
            </div>

     <!--Formulario para el login --> 
   <form action="insertar.php" class="grupo-entradas" method="post" enctype="multipart/form-data" id="frmlogin">
    <h1 class="form__title">Formulario de Registro de Estudiantes TSU</h1>
       <div class="container--flex">
        <label for="" class="form__label">Nombre</label>
        <input type="text" class="form__input" name="nombre" required>
    </div>

       <div class="container--flex">
        <label for="" class="form__label">Apellidos</label>
        <input type="text" class="form__input" name="apellidos" required>
    </div>

    <div class="container--flex">
    <label for="" class="form__label">Carrera</label>
     <input type="text" class="form__input" name="carrera" required>
    </div>

    <div class="container--flex">
        <label for="" class="form__label">Correo UTFV</label>
    <input type="text" class="form__input" name="correoUTFV" required>
    </div>

    <div class="container--flex">
        <label for="" class="form__label">Matricula</label>
     <input type="text" class="form__input" name="matricula" required>
 </div>

       <div class="container--flex">
           <label for="" class="form__label">Fecha de Hoy</label>
        <input type="date" class="form__input" name="fecha" required>
    </div>

    <div class="form__file">
        <label for="" class="form__label">Linea de Pago</label>
     <input type="file" name="archivo1" class="form__file" required>
 </div>


 <div class="form__file">
    <label for="" class="form__label">Evaluacion Docente</label>
 <input type="file" name="archivo2" class="form__file" required>
</div>

<div class="form__file">
    <label for="" class="form__label">Vigencia IMSS</label>
 <input type="file" name="archivo3" class="form__file" required>
</div>

<div class="form__file">
    <label for="" class="form__label">Comprobante "X"</label>
 <input type="file" name="archivo4" class="form__file" required>
</div>


    <input type="submit" class="form__submit">
   </form>      

    <!--Formulario para ING --> 

   <form action="insertarING.php"  method="post" enctype="multipart/form-data" id="frmregistrar" class="grupo-entradas">
    <h1 class="form__title">Formulario de Registro de Estudiantes ING</h1>
   <div class="container--flex">
       <label for="" class="form__label">Nombre</label>
    <input type="text" class="form__input" name="nombre" required>
</div>
<div class="container--flex">
        <label for="" class="form__label">Apellidos</label>
        <input type="text" class="form__input" name="apellidos" required>
    </div>

    <div class="container--flex">
    <label for="" class="form__label">Carrera</label>
     <input type="text" class="form__input" name="carrera" required>
    </div>

    <div class="container--flex">
        <label for="" class="form__label">Correo UTFV</label>
    <input type="text" class="form__input" name="correoUTFVING" required>
    </div>

    <div class="container--flex">
        <label for="" class="form__label">Matricula</label>
     <input type="text" class="form__input" name="matriculaING" required>
 </div>

       <div class="container--flex">
           <label for="" class="form__label">Fecha de Hoy</label>
        <input type="date" class="form__input" name="fecha" required>
    </div>

    <div class="form__file">
        <label for="" class="form__label">Linea de Pago</label>
     <input type="file" name="archivo1" class="form__file" required>
 </div>

 <div class="form__file">
    <label for="" class="form__label">Evaluacion Docente</label>
 <input type="file" name="archivo2" class="form__file" required>
</div>

<div class="form__file">
    <label for="" class="form__label">Vigencia IMSS</label>
 <input type="file" name="archivo3" class="form__file" required>
</div>

<div class="form__file">
    <label for="" class="form__label">Comprobante de Estadia</label>
 <input type="file" name="archivo4" class="form__file" required>
</div>

<input type="submit" class="form__submit">
   </form>      
   
   <script>
    var x = document.getElementById("frmlogin");
    var y = document.getElementById("frmregistrar");
    var z = document.getElementById("btnvai");


        function registrarvai() {
		    x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
            function loginvai() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

</body>
</html>