<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="diseño.css">
  <link rel="stylesheet" href="dsoxxo.css">
  <title>Formulario Registro empleado oxxo</title>
  <style>
table {
    background-color: skyblue;
    position: center;
    width: 80%; 
    margin-bottom: 20px; 
    border: 2px solid black;
}
th {
    background-color: aqua;
    text-align: center;
    padding: 10px; 
    border: 1px solid black;
}
td {
    
    text-align: center;
    padding: 10px;
    border: 1px solid black; 
}

  </style>
</head>
<header>
  <center>
      <section id="sect1" class="sect"><br>
          <img  src="img/logoOxxo.png" WIDTH="200px" HEIGHT="100px" >
          <h1 class="head1">Oxxo es parte de tu vida</h1><br>
        </section>
  </center>
  <BR>
      <nav>
          <img>
          <ul class="menu-horizontal">
              <li><a href="sucursales.html">Sucursales</a>
              <ul class="menu-vertical">
              <li><a href="OxxoGranjero.php">Oxxo Granjero</a></li>
                    <li><a href="OXXOPaseosAlba.php">OXXO Paseos del Alba</a></li>
                    <li><a href="OXXOPina.php">Oxxo Piña</a></li>
                    <li><a href="OXXOCamboya.php">OXXO Camboya</a></li>
                    <li><a href="OXXOPinocelli.php">OXXO Pinocelli</a></li>
                    <li><a href="OxxoBulgaria.php">Oxxo Bulgaria</a></li>
                    <li><a href="OxxoYepomera.php">Oxxo Yepomera</a></li>
              </ul></li>
              <li><a href="venta.html">Venta</a>
              </li>
              <li><a href="productos.html">Productos</a>
              </li>
              <li><a href="index.html">Inicio</a></li>
  
          </ul>
      </nav>
</header>

<body><center>
<h1> Tabla registros empleados de OXXO</h1>
    <table  class="tabla" >
        <thead>
            <tr>
                <th >IdEmpleado</th>
                <th >Nombre</th>
                <th >Apellido</th>
                <th >IdSucursal</th>
                <th >Fecha de nacimiento</th>
                <th >Fecha de ingreso</th>
                <th >Puesto de trabajo</th>
                <th >Sueldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Empleados = array(
                array(01,"juan","Perez",04,"16/02/2002","19/09/2023","Cajero",2700.00),
                array(02,"Alejandra","Lopez",02,"2/07/2000","19/09/2023","Cajero",2700.00),
                array(03,"Sebastian","Martines",04,"4/09/2002","19/09/2023","Empaquetador",2500.00),
                array(04,"Guadalupe","Ornelas",03,"28/02/2004","19/09/2023","Empaquetador",2500.00)
            );

            foreach ($Empleados as $Empleado) {
                echo "<tr >";
                echo "<td >" . $Empleado[0] . "</td>";
                echo "<td >" . $Empleado[1] . "</td>";
                echo "<td >" . $Empleado[2] . "</td>";
                echo "<td >" . $Empleado[3] . "</td>";
                echo "<td >" . $Empleado[4] . "</td>";
                echo "<td >" . $Empleado[5] . "</td>";
                echo "<td >" . $Empleado[6] . "</td>";
                echo "<td >" . $Empleado[7] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>Tabla SQL  </h1><br>
    <img  src="img/imgEmp.png" WIDTH="900px" HEIGHT="350px" >
    
        <br><br> </center>
</body>
<footer>
    <center>
        <p><br><br>¡SÍGUENOS EN NUESTRAS REDES SOCIALES!<br> 
            <img  src="img/logoig.png" WIDTH="50" HEIGHT="50" >
            <img  src="img/facebooklogo.png" WIDTH="50" HEIGHT="50" >
            <img  src="img/youtubelogo.png" WIDTH="50" HEIGHT="50" ><br>
            FEMSA// OXXO Inmuebles// OXXO Gas// Preguntas frecuentes// Responsabilidad social<br>
            Facturación electrónica// Consulta de CFDi// OXXO Reclutamiento// Aviso de privacidad
            <br>Términos y condiciones
           
            </p>
            

        <p>Nancy Yazmin Castro Luna</p>
        <p>5°i<br><br></p>
    </center>
</footer>
</html>