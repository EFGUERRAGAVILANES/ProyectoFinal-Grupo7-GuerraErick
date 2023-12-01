<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de restaurante</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <?php 
            $platos = [
                [
                    'id' => 1,
                    'foto' => 'https://www.laylita.com/recetas/wp-content/uploads/Menestra-de-lentejas.jpg',
                    'nombre' => 'Arroz con menetra',
                    'descripcion' => 'El platillo contiene arroz, menestra de lenteja, aguacate, platano maduro y carne',
                    'precio' => 2.50,
                ],
                [
                    'id' => 2,
                    'foto' => 'https://www.cocina-ecuatoriana.com/base/stock/Recipe/408-image/408-image_web.jpg',
                    'nombre' => 'Seco de pollo',
                    'descripcion' => 'El platillo contiene arroz, seco con presa de pollo, platano frito y ensalada',
                    'precio' => 2.00,
                ],
                [
                    'id' => 3,
                    'foto' => 'https://i.ytimg.com/vi/lsJbIiqivbY/maxresdefault.jpg',
                    'nombre' => 'Yapingacho',
                    'descripcion' => 'El platillo contiene tortilla de papa, chorizo, aguacate, huevo frito y ensalada',
                    'precio' => 3.00,
                ],
                [
                    'id' => 4,
                    'foto' => 'https://www.deliciosi.com/images/400/494/caldo-de-bolas.jpg',
                    'nombre' => 'Caldo de bola',
                    'descripcion' => 'El platillo contiene bola de verde, choclo, carne',
                    'precio' => 1.99,
                ],
                [
                    'id' => 5,
                    'foto' => 'https://img.goraymi.com/2017/12/15/c33a10f623d5e94cdef6f63776408547_xl.jpg',
                    'nombre' => 'Bolón de verde',
                    'descripcion' => 'El platillo contiene bolón de verde o platano maduro que puede ser con chicharron, queso o mixto',
                    'precio' => 1.79,
                ],
                [
                    'id' => 6,
                    'foto' => 'https://upload.wikimedia.org/wikipedia/commons/2/2d/Semifinal_del_Campeonato_del_Encebollado_en_Esmeraldas_2015_%2818062294436%29.jpg',
                    'nombre' => 'Encebollado',
                    'descripcion' => 'El platillo contiene un caldo con pescado, cebolla, yuca y puede acompañarse con chifle o pan',
                    'precio' => 2.79,
                ],
                [
                    'id' => 7,
                    'foto' => 'https://www.recetasnestle.com.ec/sites/default/files/srh_recipes/cda13d770e8135d603f5d37d1080c00f.jpg',
                    'nombre' => 'Casuela',
                    'descripcion' => 'El platillo contiene carne de res o pollo o pescado o mariscos, más verduras variadas: papas, zanahorias, arvejas, habas, zapallo, choclo',
                    'precio' => 2.79,
                ],
                [
                    'id' => 8,
                    'foto' => 'https://www.elfinanciero.com.mx/resizer/55EtwOP_tCwLYVvoc4qyhaidKJ8=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/2ZCG7LWUNZFR5JNKX4P6U7JKAU.jpg',
                    'nombre' => 'Bebida',
                    'descripcion' => 'Bebidas café con agua o leche',
                    'precio' => 1.99, 3.00,
                ],
                [
                    'id' => 9,
                    'foto' => 'https://villacatalina.com.ar/wp-content/uploads/2023/04/AdobeStock_279492434_Editorial_Use_Only.jpeg.jpg',
                    'nombre' => 'Gaseosas',
                    'descripcion' => 'Bebidas de toda marca y sabores a disposición',
                    'precio' => 1.99, 3.00,
                ],
                [
                    'id' => 10,
                    'foto' => 'https://s2.abcstatics.com/media/bienestar/2020/07/04/batidos-saludables-kdhH--1248x698@abc.jpeg',
                    'nombre' => 'Batidos',
                    'descripcion' => 'Batidos de todos los ingredientes a disposición para el cliente',
                    'precio' => 1.99, 2.50,
                ],
            
            ];
            foreach ($platos as $plato): 
        ?>
            <div class="plato">
                <img src="<?php echo $plato['foto']; ?>" alt="<?php echo $plato['nombre']; ?>">
                <h2><?php echo $plato['nombre']; ?></h2>
                <p><?php echo $plato['descripcion']; ?></p>
                <p>Precio: $<?php echo $plato['precio']; ?></p>
                <button class="add" data-id="<?php echo $plato['id']; ?>">Agregar</button>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="carrito">
        <h1>Carrito</h1>
        <ul class="carrito-lista">
           
        </ul>
    </div>
    <script>
        <?php 
            echo 'var platos = '.json_encode($platos).';';
        ?>
    </script>
    <script src="script.js"></script>
</body>
</html>