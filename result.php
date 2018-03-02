<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>titulo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <?
    include 'config.php';
    ?>
</head>
<body>
      <div class="container-fluid">
        <section class="main row">
            <div class="row">
             <div class="col-md-1 col-lg-2">
             </div>
             <div class="col-md-10 col-lg-8">
               <img src="img/logo.png" class=img-resposive></img>
             </div>             
             <div class="col-md-1 col-lg-2">
             </div>
            </div>
        </section>
    </div>
       <div class="ficha">
    <div class="container-fluid">
        <section class="main row">
            <div class="row">
             <div class="col-md-2 col-lg-2">
             </div>
             <div class="col-md-4 col-lg-3">
               <?php

$bsc= $_POST['RUN'];
$host="localhost";
$username="root";
$password="";
$db_name="funa2";
$link= mysqli_connect("$host","$username","$password","$db_name");

$consulta= mysqli_query($link,"SELECT * FROM persona WHERE RUN=$bsc"); 
$count = mysqli_num_rows($consulta);
if ($consulta==TRUE){
    if ($count > 0) {
        while($row = mysqli_fetch_assoc($consulta)){
            echo "<img id=foto src=".$row['foto']." class=img-resposive></img>";
        }
    }
    else {
    echo "<h1>foto generica</h1>";
}

}

?>
             </div>             
              <div id="datos" class="col-md-5 col-lg-3">
               <?php

$bsc= $_POST['RUN'];
$host="localhost";
$username="root";
$password="";
$db_name="funa2";
$link= mysqli_connect("$host","$username","$password","$db_name");

$consulta= mysqli_query($link,"SELECT * FROM persona WHERE RUN=$bsc"); 
$count = mysqli_num_rows($consulta);
if ($consulta==TRUE){
    if ($count > 0) {
        while($row = mysqli_fetch_assoc($consulta)){
            echo "<h3>RUT: ".$row['RUN']."</h3> <br> <h3>NOMBRE: ".$row['nombre']."</h3> <br> <h3>APELLIDO P: ".$row['appaterno']."</h3> <br> <h3>APELLIDO M: ".$row['apmaterno']."</h3>";
        }
    }
    else {
    echo "<h1>sin resultados</h1>";
}

}

?>
             </div> 
             <div class="col-md-1 col-lg-4">
             </div>
            </div>
        </section>
    </div>
     <div class="container-fluid">
        <section class="main row">
            <div class="row">
             <div class="col-md-3 col-lg-2">
             </div>
             <div id="delito" class="col-md-6 col-lg-8">
               <?php

$bsc= $_POST['RUN'];
$host="localhost";
$username="root";
$password="";
$db_name="funa2";
$link= mysqli_connect("$host","$username","$password","$db_name");

$consulta= mysqli_query($link,"SELECT * FROM crimen WHERE RUT=$bsc"); 
$count = mysqli_num_rows($consulta);
if ($consulta==TRUE){
    if ($count > 0) {
        while($row = mysqli_fetch_assoc($consulta)){
            echo "<li>".$row['delito']."</li>";
        }
    }
   }
?>
             </div>             
             <div class="col-md-3 col-lg-2">
             </div>
            </div>
        </section>
    </div>
</div>
 
</body>
</html>

 
