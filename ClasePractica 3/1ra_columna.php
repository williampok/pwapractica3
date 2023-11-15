<!-- Contenido de la primera columna ... -->
<h1 class="mt-4 mb-4">Nuestros Servicios</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre del Servicio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($services as $service) { ?>
            <tr>
                <td><img src="<?php echo $service['image'] ?>" class="img-thumbnail" alt="<?php echo $service['name'] ?>" width="100" height="100"></td>
                <td><?php echo $service['name'] ?></td>
                <td><?php echo $service['desc'] ?></td>
                <td><?php echo $service['price'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="serviceId" value="<?php echo $service['id'] ?>">
                        <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>