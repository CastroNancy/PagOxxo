<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="diseño.css">
  <link rel="stylesheet" href="dsoxxo.css">
  <title>Venta de oxxo</title>
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
              <li><a href="productos.html">Productos</a>
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
<h1> Tabla Venta de OXXO</h1><br>
    <table  class="tabla" >
        <thead>
            <tr>
                <th >IdVenta</th>
                <th >IdProducto</th>
                <th >Metodo de pago</th>
                <th >Cantidad de productos</th>
                <th >Id Sucursal</th>
                <th >Id Cliente</th>
                <th >fecha de la Venta</th>
                <th >Puntos de compra</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Ventas = array(
                array(01,3728,"efectivo",3,02,836,"22/09/2023",2000),
                array(02,2722,"efectivo",2,02,345,"22/09/2023",500),
                array(03,3343,"tarjeta",10,03,234,"22/09/2023",10450),
                array(04,4322,"efectivo",3,01,34,"22/09/2023",1200)
            );

            foreach ($Ventas as $Venta) {
                echo "<tr >";
                echo "<td >" . $Venta[0] . "</td>";
                echo "<td >" . $Venta[1] . "</td>";
                echo "<td >" . $Venta[2] . "</td>";
                echo "<td >" . $Venta[3] . "</td>";
                echo "<td >" . $Venta[4] . "</td>";
                echo "<td >" . $Venta[5] . "</td>";
                echo "<td >" . $Venta[6] . "</td>";
                echo "<td >" . $Venta[7] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>  
     <h1>Tabla SQL  </h1><br>
    <img  src="img/imgVen.png" WIDTH="900px" HEIGHT="350px" >
    
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