<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="diseño.css">
  <link rel="stylesheet" href="dsoxxo.css">
  <title>Productos de oxxo</title>
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
              <li><a href="#">Registrarse</a>
                <ul class="menu-vertical">
                    <li><a href="RegistroEmp.html">Empleado</a></li>
                    <li><a href="RegistroClie.html">Cliente</a></li>
                </ul></li>
              <li><a href="index.html">Inicio</a></li>
  
          </ul>
      </nav>
</header>

<body><center><br>
<h1> Tabla Productos de OXXO</h1><br>
    <table  class="tabla" >
        <thead>
            <tr>
                <th >IdProducto</th>
                <th >Caducidad</th>
                <th >Precio</th>
                <th >Tamaño</th>
                <th >Promocion</th>
                <th >Distribuidora</th>
                <th >Id Sucursal</th>
                <th >Id Venta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Productos = array(
                array(373,"04/07/2025","$23","160gr","nulo","sabritas",01,23),
                array(635,"25/09/2024","$37","300gr","3x1","gamesa",02,54),
                array(623,"08/7/2024","$30","1lt","2x1","ciel",02,95),
                array(253,"02/12/2026","$50","600gr","25%","barcel",06,53)
            );

            foreach ($Productos as $Producto) {
                echo "<tr >";
                echo "<td >" . $Producto[0] . "</td>";
                echo "<td >" . $Producto[1] . "</td>";
                echo "<td >" . $Producto[2] . "</td>";
                echo "<td >" . $Producto[3] . "</td>";
                echo "<td >" . $Producto[4] . "</td>";
                echo "<td >" . $Producto[5] . "</td>";
                echo "<td >" . $Producto[6] . "</td>";
                echo "<td >" . $Producto[7] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>Tabla SQL  </h1><br>
    <img  src="img/imgPro.png" WIDTH="900px" HEIGHT="350px" >
    
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