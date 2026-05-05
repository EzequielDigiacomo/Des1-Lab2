<?php

function calcular_diferencia_stock($stock_actual, $stock_minimo) {
    return $stock_actual - $stock_minimo;
}

function obtener_clase_color($diferencia) {
    if ($diferencia <= 10) {
        return "danger";
    } elseif ($diferencia > 10 && $diferencia < 30) {
        return "warning";
    } else {
        return "success";
    }
}

function esta_disponible_web($diferencia) {
    return $diferencia > 10;
}

function obtener_icono_venta_web($disponible) {
    if ($disponible) {
        return "bi-cart4";
    } else {
        return "bi-cart-x-fill";
    }
}

function obtener_tooltip_venta_web($disponible) {
    if ($disponible) {
        return "Se permite venta web";
    } else {
        return "No se permite venta web";
    }
}

function calcular_monetario_stock($stock_actual, $precio_final) {
    return $stock_actual * $precio_final;
}

function obtener_precio_final($precio_usd, $moneda, $cotizacion) {
    if ($moneda === 'peso') {
        return $precio_usd * $cotizacion;
    }
    return $precio_usd;
}

function obtener_simbolo_moneda($moneda) {
    if ($moneda === 'peso') {
        return "$";
    }
    return "U\$S";
}
?>
