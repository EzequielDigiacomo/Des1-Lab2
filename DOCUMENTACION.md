# 📖 Documentación Completa: Proyecto Desempeño 1 - PHP

Esta guía explica desde cero cómo se estructuró y desarrolló este proyecto, ideal para estudiar y comprender el funcionamiento de una aplicación web dinámica con PHP.

---

## 🚀 1. Conceptos Iniciales

### ¿Qué es PHP y por qué lo usamos?
A diferencia del HTML (que es estático y no cambia), PHP es un lenguaje de **servidor**. Esto significa que antes de que veas la página en tu navegador, el servidor (XAMPP) lee el código PHP, realiza cálculos, procesa datos y "arma" el HTML final que tú ves.

### Requisitos para ver el proyecto
Para que el código PHP funcione, no basta con abrir el archivo con doble clic. Debes:
1. Tener **XAMPP** encendido (módulo Apache).
2. Tener la carpeta del proyecto dentro de `C:\xampp\htdocs\Des1-Lab2`.
3. Acceder desde el navegador usando la dirección: `http://localhost/Des1-Lab2/listado.php`.

---

## 📂 2. Estructura del Proyecto

El proyecto se dividió en varios archivos para seguir las buenas prácticas de programación (Modularización). Cada archivo tiene una responsabilidad única:

| Archivo | Responsabilidad |
| :--- | :--- |
| `datos.php` | Contiene la información de los productos (Base de datos simulada). |
| `funciones.php` | Contiene las fórmulas matemáticas y lógica de negocio. |
| `encabezado.php` | El menú superior y la lógica para detectar la moneda. |
| `lateral.php` | El menú de navegación izquierdo. |
| `footer.php` | El pie de página y las tarjetas de resumen (fichas inferiores). |
| `listado.php` | El archivo principal que une todo y muestra la tabla. |

---

## 🛠️ 3. Explicación Técnica (Paso a Paso)

### A. Cómo se unen los archivos (`require_once`)
Para que un archivo pueda usar lo que hay en otro, usamos `require_once`. Si el archivo no existe o tiene un error, PHP detendrá la ejecución (esto garantiza seguridad).
Ejemplo en `listado.php`:
```php
require_once 'datos.php'; // Trae la lista de productos
require_once 'funciones.php'; // Trae las funciones de cálculo
require.
```

### B. El Arreglo Multidimensional (`datos.php`)
Los productos se guardan en un **arreglo de arreglos**. Es como una planilla de Excel:
- El arreglo principal es la "hoja".
- Cada sub-arreglo es una "fila" con sus columnas (código, imagen, precio).

### C. Funciones (`funciones.php`)
Son bloques de código reutilizables. Por ejemplo, la función `obtener_precio_final` recibe el precio en dólares y la moneda elegida. Si la moneda es "peso", hace la cuenta `precio * 1500` y te devuelve el resultado.

### D. El selector de Moneda (`$_GET`)
Cuando haces clic en "Pesos", la URL cambia a `listado.php?moneda=peso`.
PHP captura ese valor con `$_GET['moneda']`. Esto permite que la misma página se comporte de dos formas distintas (Dólar o Peso) sin necesidad de crear dos archivos diferentes.

### E. El Bucle de la Tabla (`foreach`)
En `listado.php`, usamos un `foreach` para recorrer la lista de productos. Por cada producto:
1. Llamamos a las funciones para calcular su stock y precio.
2. Decidimos qué color usar (rojo, amarillo o verde).
3. Escribimos una fila `<tr>` en la tabla HTML con esos datos.

### F. Optimización (Acumuladores)
Dentro del mismo bucle de la tabla, vamos sumando los valores en variables (ej. `$total_monetario`). Así, cuando llegamos al final de la página (el `footer.php`), ya tenemos los totales calculados sin haber tenido que procesar todo de nuevo.

---

## 🎨 4. Lógica Visual Dinámica

Para que la web cambie de aspecto, usamos PHP dentro de los atributos de HTML:

*   **Colores de alerta**: `class="badge border-<?php echo $clase_color; ?>"`
    *   Si la función devolvió "danger", la clase final será `badge border-danger` (rojo).
*   **Banderas**: `<img src="assets/img/<?php echo $moneda === 'peso' ? 'ar.png' : 'en.jpg'; ?>">`
    *   Si la variable `$moneda` es "peso", muestra la bandera argentina.

---

## 📝 5. Resumen del Flujo de Ejecución

1. El usuario entra a `listado.php`.
2. PHP carga los datos y las funciones.
3. PHP revisa la URL para saber si el usuario quiere ver Pesos o Dólares.
4. PHP empieza a recorrer la lista de productos.
5. Por cada producto, genera el HTML de la tabla con los cálculos aplicados.
6. Al final, PHP pega el pie de página con los totales acumulados.
7. El servidor envía todo ese HTML "armado" al navegador del usuario.

---
**Documentación creada para el 1er Desempeño - Lab 2**
