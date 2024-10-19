<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
        //Declarar 3 arrays
        $codigoProducto = array("123", "124", "125","126","127");
        $nombreProducto = array("BALON", "RAQUETA", "TENIS","CUERDA","GORRA");
        $precioUnd = array(15000, 27000, 35600,12000,30000);
        $stock = array(10,15,40,80,50);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sports Center</title>        
    </head>
    <body>
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #F0F0F0;
                color: #333;
                margin: 0;
                padding: 0;
            }

            h1, h2, h3 {
                font-family: 'Montserrat', sans-serif;
                color: #003366;
            }

            /* Header */
            header {
                background-color: #003366;
                color: white;
                padding: 20px;
                text-align: center;
            }

            nav {
                margin: 15px 0;
            }

            nav a {
                color: white;
                margin: 0 15px;
                text-decoration: none;
                font-weight: bold;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #FF6600;
            }

            /* Main Section */
            main {
                padding: 20px;
            }

            /* Product Section */
            section {
                margin: 20px 0;
            }

            .product-card {
                background: white;
                border-radius: 10px;
                padding: 15px;
                margin: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s;
            }

            .product-card:hover {
                transform: scale(1.05);
            }

            .product-card h3 {
                margin: 0;
                font-size: 1.5em;
            }

            .product-card p {
                color: #666;
            }

            .button {
                display: inline-block;
                background-color: #003366;
                color: #FFFFFF;
                border-radius: 5px;
                padding: 10px 15px;
                text-align: center;
                text-decoration: none;
                transition: background-color 0.3s, transform 0.2s;
            }

            .button:hover {
                background-color: #FF6600;
                transform: scale(1.05);
            }

            /* Footer */
            footer {
                background-color: #003366;
                color: white;
                text-align: center;
                padding: 15px;
                position: relative;
                bottom: 0;
                width: 100%;
            }

            footer a {
                color: #FF6600;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                nav {
                    font-size: 14px;
                }
                .product-card {
                    margin: 5px;
                }
            }
        </style>
        <header>
            <nav>
                <ul>
                    <li style="display:inline"> <a href="index.php">Pagina Inicio</a></li>
                    <li style="display:inline"> <a href="listasProductos.php">Listas de Productos</a></li>
                    <li style="display:inline"> <a href="buscarProducto.php">Buscar Producto</a></li>
                    <li style="display:inline"> <a href="realizarVenta.php">Realizar Venta</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div style='text-align: center;'>
                <h1 style='color: blueviolet;'>Sports Center</h1>    
                <img src="imagenes/Sports.jpeg "height="200">;
            </div>
            <div>
                <center><table border='0'style='background-color: white;'>
                    <caption>Listado de Productos</caption>
                    <tr style='background-color: lightgray;'>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Precio Und</th>
                        <th>Stock</th>
                    </tr>
                    <?php
                        //recorrer los array y mostrarlos en una tabla
                        for($i=0;$i<count($codigoProducto);$i++){
                            echo "<tr><td>$codigoProducto[$i]</td><td>$nombreProducto[$i]</td><td>$precioUnd[$i]</td><td>$stock[$i]</td></tr>";
                        }
                    ?>
                    </table></center>
            </div>
        </section>
        <footer>
            <hr>
            <h4 style='text-align: center;'>¡Prepárate para llevar tu pasión por el deporte al siguiente nivel con Sports Center!</h4>
        </footer>
    </body>
</html>