<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="diseño.css">
  <link rel="stylesheet" href="dsoxxo.css">
  <title>Formulario Registro cliente oxxo</title>
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
<h1> Tabla registros clientes de OXXO</h1>
    <table  class="tabla" >
        <thead>
            <tr>
                <th >Id Cliente</th>
                <th >Nombre</th>
                <th >Apellido</th>
                <th >Numero de contacto</th>
                <th >Fecha de nacimiento</th>
                <th >Fecha de registro</th>
                <th >Direccion</th>
                <th >Id Sucursal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $clientes = array(
                array(272,"Maria","Hernandez",6567893849,"19/3/2002","19/09/2023","Calle granjero",02),
                array(172,"Alma","Montes",6569372465,"22/04/1993","19/09/2023","Calle sol",04),
                array(678,"Santiago","Obregon",6562435467,"6/11/1973","19/09/2023","Calle poniente",03),
                array(289,"Iker","Castillo",6148372521,"7/12/2004","19/09/2023","Calle michelena",03)
            );

            foreach ($clientes as $cliente) {
                echo "<tr >";
                echo "<td >" . $cliente[0] . "</td>";
                echo "<td >" . $cliente[1] . "</td>";
                echo "<td >" . $cliente[2] . "</td>";
                echo "<td >" . $cliente[3] . "</td>";
                echo "<td >" . $cliente[4] . "</td>";
                echo "<td >" . $cliente[5] . "</td>";
                echo "<td >" . $cliente[6] . "</td>";
                echo "<td >" . $cliente[7] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>Tabla SQL  </h1><br>
    <img  src="img/imgCli.png" WIDTH="900px" HEIGHT="350px" >
    
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