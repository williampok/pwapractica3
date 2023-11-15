<?php

$services = array(
    array("id" => 1, "name" => "Carne", "desc" => "fileteada 1 libra", "image" => "imagenes/carne.png", "price" => 100),
    array("id" => 2, "name" => "Pollo", "desc" => "precosido", "image" => "imagenes/2209875-1.jpg", "price" => 200),
    array("id" => 3, "name" => "Pescado", "desc" => "Albacora", "image" => "imagenes/pescado.jpg", "price" => 300),
    array("id" => 4, "name" => "Huevo", "desc" => "4", "image" => "imagenes/HUEVOS.jpg", "price" => 400),
    array("id" => 5, "name" => "Arroz", "desc" => "2 libras", "image" => "imagenes/Arroz.png", "price" => 500),
    array("id" => 6, "name" => "Dulces", "desc" => "Chocolates", "image" => "imagenes/dulces.png", "price" => 600),
    array("id" => 7, "name" => "Jugos", "desc" => "Pulp de 1 litro", "image" => "imagenes/jugo.png", "price" => 700),
    array("id" => 8, "name" => "Gaseosas", "desc" => "cocacola mediana", "image" => "imagenes/colal.jpg", "price" => 800),
    array("id" => 9, "name" => "Snacks", "desc" => "Papas, cheetos, doritos", "image" => "imagenes/snacks.png", "price" => 900),
    array("id" => 10, "name" => "Agua", "desc" => "Botella de Agua", "image" => "imagenes/agua.jpg", "price" => 1000),
  );

session_start();

if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $serviceId = $_POST["serviceId"];
  if (!in_array($serviceId, $_SESSION["cart"])) {
    $_SESSION["cart"][] = $serviceId;
    echo "<div>Servicio añadido al carrito</div>";
  } else {
    echo "<div>Este servicio ya está en el carrito</div>";
  }
}
// A partir de aquí va el código HTML...
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Servicios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
       @import url(estilo.css);
    </style>
</head>
<body>

<div class="container">
    <table class="table table-responsive">
        <tr>
            <td valign="top">
                <?php require "1ra_columna.php"; ?>
            </td>
            <td valign="top">
                <?php require "2da_columna.php"; ?>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
