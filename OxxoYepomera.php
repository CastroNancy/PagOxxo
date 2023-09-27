<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="diseño.css">
  <link rel="stylesheet" href="dsoxxo.css">
  <title>Oxxo Yepomera</title>
  <style>
table {
    background-color: aqua;
    position: center;
    width: 80%; 
    margin-bottom: 20px; 
    border: 2px solid black;
}
th {
    background-color: skyblue;
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
              <li><a href="#">Registrarse</a>
                <ul class="menu-vertical">
                    <li><a href="RegistroEmp.html">Empleado</a></li>
                    <li><a href="RegistroClie.html">Cliente</a></li>
                </ul></li>
              <li><a href="index.html">Inicio</a></li>
  
          </ul>
      </nav>
</header>

<body><center>
<br><h1> Oxxo Yepomera</h1><br>
    <table  class="tabla" >
        <thead>
            <tr>
                <th > Id sucursal</th>
                <th >direccion </th>
                <th >Horario de apertura</th>
                <th >Id Empleado</th>
                <th >Distribuidora</th>
                <th >Nombre sucursal</th>
                <th >Ciudad de la sucursal</th>
                <th >Dias de apertura</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sucursa = array(
                array(07," C. Yepomera 9001, Praderas Del Sur, 32575 Cd Juárez, Chih. ",
                "7a.m.–11p.m"," 75"," barcel","Oxxo Yepomera ","Cd Juarez","7 dias a la semana")
            );

            foreach ($sucursa as $sucursal) {
                echo "<tr >";
                echo "<td >" . $sucursal[0] . "</td>";
                echo "<td >" . $sucursal[1] . "</td>";
                echo "<td >" . $sucursal[2] . "</td>";
                echo "<td >" . $sucursal[3] . "</td>";
                echo "<td >" . $sucursal[4] . "</td>";
                echo "<td >" . $sucursal[5] . "</td>";
                echo "<td >" . $sucursal[6] . "</td>";
                echo "<td >" . $sucursal[7] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>Tabla SQL   y   Direccion en maps</h1><br>
    <img  src="img/imgSuc.png" WIDTH="850px" HEIGHT="350px" >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.953403732305!2d-99.15408802604615!3d19.3711701818951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffb185d42a15%3A0x6fb63ea117f1ca4a!2sOxxo%20Bulgaria!5e0!3m2!1ses-419!2smx!4v1695699048202!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br> </center></body>
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