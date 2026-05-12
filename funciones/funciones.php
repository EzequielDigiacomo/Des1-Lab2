<?php

function obtener_cotizacion()
{
    return 1500;
}

function calcular_diferencia_stock($stock_actual, $stock_minimo)
{
    return $stock_actual - $stock_minimo;
}

function obtener_clase_color($diferencia)
{
    if ($diferencia <= 10) {
        return "danger"; //rojo
    } elseif ($diferencia > 10 && $diferencia < 30) {
        return "warning"; //amarillo
    } else {
        return "success"; //verde
    }
}

function esta_disponible_web($diferencia)
{
    return $diferencia > 10;
}

function obtener_icono_venta_web($disponible)
{
    if ($disponible) {
        return "bi-cart4"; //venta disponible
    } else {
        return "bi-cart-x-fill"; // venta no disponible o esperando stock
    }
}

function obtener_tooltip_venta_web($disponible)
{
    if ($disponible) {
        return "Se permite venta web";
    } else {
        return "No se permite venta web";
    }
}



function calcular_monetario_stock($stock_actual, $precio_final)
{
    return $stock_actual * $precio_final;
}

function obtener_precio_final($precio_usd, $moneda, $cotizacion)
{
    if ($moneda === 'peso') {
        return $precio_usd * $cotizacion;
    }
    return $precio_usd;
}

function obtener_simbolo_moneda($moneda)
{
    if ($moneda === 'peso') {
        return "$";
    }
    return "U\$S"; //'U$S';
}

function obtener_imagen_moneda($moneda)
{
    return $moneda === 'peso' ? 'ar.png' : 'en.jpg';
}

function obtener_nombre_moneda($moneda)
{
    return $moneda === 'peso' ? 'PESO ARGENTINO' : 'DÓLARES';
}

function obtener_monetario_stock_dual($stock_actual, $precio_usd, $cotizacion)
{
    return [
        'dolar' => $stock_actual * $precio_usd,
        'peso' => $stock_actual * ($precio_usd * $cotizacion)
    ];
}

//FUNCIONES DE CUENTAS (TOTALES)
function calcular_stock_total($productos)
{
    $total = 0;
    foreach ($productos as $p) {
        $total += $p['stock_actual'];
    }
    return $total;
}

function calcular_monetario_total($productos, $moneda, $cotizacion)
{
    $total = 0;
    foreach ($productos as $p) {
        $precio_final = obtener_precio_final($p['precio_usd'], $moneda, $cotizacion);
        $total += calcular_monetario_stock($p['stock_actual'], $precio_final);
    }
    return $total;
}

function calcular_total_web($productos)
{
    $total = 0;
    foreach ($productos as $p) {
        $diferencia = calcular_diferencia_stock($p['stock_actual'], $p['stock_minimo']);
        if (esta_disponible_web($diferencia)) {
            $total++;
        }
    }
    return $total;
}
?>