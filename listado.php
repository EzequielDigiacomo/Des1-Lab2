<?php
require_once 'funciones.php';
require_once 'datos.php';
require_once 'encabezado.php';
require_once 'lateral.php';

$simbolo_moneda = obtener_simbolo_moneda($moneda);
$total_productos_web = 0;
$total_monetario = 0;
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Listado de Productos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                <li class="breadcrumb-item active">Los mas vendidos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Los mas vendidos</h5>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Stock Min.</th>
                                            <th scope="col" title="Stock Actual - Stock Min.">Diferencia Stock</th>
                                            <th scope="col">Precio Unit.</th>
                                            <th scope="col">Venta Web</th>
                                            <th scope="col">Monetario en stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 1;
                                        foreach ($productos as $p) {
                                            $diferencia = calcular_diferencia_stock($p['stock_actual'], $p['stock_minimo']);
                                            $clase_color = obtener_clase_color($diferencia);
                                            $disponible = esta_disponible_web($diferencia);
                                            $icono_venta = obtener_icono_venta_web($disponible);
                                            $tooltip_venta = obtener_tooltip_venta_web($disponible);
                                            $precio_final = obtener_precio_final($p['precio_usd'], $moneda, $cotizacion);
                                            $monetario_stock = calcular_monetario_stock($p['stock_actual'], $precio_final);

                                            if ($disponible) {
                                                $total_productos_web++;
                                            }
                                            $total_monetario += $monetario_stock;
                                            
                                            // Porcentaje de la barra de progreso (simulando que max es 100 por simplicidad, como el html original)
                                            // En el html original el width se ponía directo con el número de stock actual, lo copiamos así.
                                            $progreso_width = $p['stock_actual']; 
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $contador; ?></th>
                                            <th scope="row">
                                                <a href="#">
                                                    <img src="<?php echo $p['imagen']; ?>" title="<?php echo $p['codigo']; ?>">
                                                </a>
                                            </th>
                                            <td>
                                                <a href="#" class="text-primary fw-bold">
                                                    <?php echo $p['descripcion']; ?>
                                                </a>
                                                <div class="progress mt-3">
                                                    <div class="progress-bar progress-bar-striped bg-<?php echo $clase_color; ?> progress-bar-animated"
                                                        role="progressbar" style="width: <?php echo $progreso_width; ?>%" title="Stock Actual <?php echo $p['stock_actual']; ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4>
                                                    <span class="badge border-info border-1 text-info">
                                                        <?php echo $p['stock_minimo']; ?>
                                                    </span>
                                                </h4>
                                            </td>
                                            <td>
                                                <h4>
                                                    <span class="badge border-info border-1 text-info" title="<?php echo $p['stock_actual']; ?> - <?php echo $p['stock_minimo']; ?>">
                                                        <?php echo $diferencia; ?>
                                                    </span>
                                                </h4>
                                            </td>
                                            <td>
                                                <h4>
                                                    <span class="badge border-<?php echo $clase_color; ?> border-1 text-<?php echo $clase_color; ?>">
                                                        <?php echo $simbolo_moneda . ' ' . $precio_final; ?>
                                                    </span>
                                                </h4>
                                            </td>
                                            <td>
                                                <h3>
                                                    <span class="badge border-<?php echo $clase_color; ?> border-1 text-<?php echo $clase_color; ?>" title="<?php echo $tooltip_venta; ?>">
                                                        <i class="bi <?php echo $icono_venta; ?>"></i>
                                                    </span>
                                                </h3>
                                            </td>
                                            <td>
                                                <h4>
                                                    <span class="badge border-info border-1 text-info">
                                                        <?php echo $simbolo_moneda . ' ' . $monetario_stock; ?>
                                                    </span>
                                                </h4>
                                            </td>
                                        </tr>
                                        <?php
                                            $contador++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->

<?php require_once 'footer.php'; ?>
