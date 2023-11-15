<!-- Contenido de la segunda columna ... -->
<?php
    // Muestra el carrito
    echo "<h2>Carrito</h2>";
    if (!empty($_SESSION["cart"])) {
        echo "<table class=\"table\">";
        echo "<thead><tr><th>Nombre del servicio</th><th>Precio</th></tr></thead>";
        echo "<tbody>";
        foreach ($_SESSION["cart"] as $itemId) {
            foreach($services as $service) {
                if ($service["id"] == $itemId) {
                    echo "<tr><td>" . $service["name"] . "</td><td>" . $service["price"] . "</td></tr>";
                }
            }
        }
        echo "</tbody></table>";
    } else {
        echo "<p>Tu carrito está vacío.</p>";
    }
?>