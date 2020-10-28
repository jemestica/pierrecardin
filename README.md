# pierrecardin
Captura de informacion de tarjeta

Como ejecutarlo.

* Clonar el repositorio con git clone o gh repo clone
* Moverse al folder pierrecardin
* Modificar el archivo config/config.php
* Cambiar la constante de URL segun en donde se halla clonado el repositorio en localhost
* Guardar
* Ir a http://localhost/ruta-del-proyecto

## Project Goal
La actividad a desarrollar será la siguiente:

## PASO 1

Crear formulario de pago (diseño libre) como parte del conocimiento  de HTML5, CSS y JQUERY se evaluará nivel de desarrollo

## PASO 2

Capturar información de tarjeta según formulario desarrollado en el punto 1 y según el array proporcionado al final de este correo:

  *   Aplicar un 30% de descuento si el producto pertenece a cualquiera de estos catálogos 01, 02 y si BIN de tarjeta es igual 489983, 402738
  *   Monto máximo de compra para aplicar el descuento $100, es decir, $30 de descuento máximo por cliente.

 

Nota: el BIN de las tarjetas crédito / débito equivale a los primeros 6 dígitos de las tarjetas.

## PASO 3

Imprimir en pantalla el descuento a ser aplicado (si aplica)

Pueden instalar XAMP en sus equipos como entorno de prueba para desarrollar la actividad, cualquier duda. Estoy a la orden.
Pueden hacer solo el PUNTO 1. SI, Pueden hacer solo el PUNTO 2. SI, todo (ideal)


## Array


[0] =>
        (
            [name] => CAMISA DE VESTIR 
            [Sku] => 128804
            [Qty] => 2
            [Amount] => 7.9500
            [catalog] => 0101
        )

    [1] =>
        (
            [name] => PANTALON DE VESTIR
            [Sku] => 106140
            [Qty] => 1
            [Amount] => 30.0000
            [Discount] => 0
            [catalog] => 010102
        )

    [2] =>
        (
            [name] => CORBATA COLOR NEGRO
            [Sku] => 83727
            [Qty] => 1
            [Amount] => 19.9500
            [Discount] => 0
            [catalog] => 0401
        )
    [3] =>
        (
            [name] => BLUSA DE FLORES 
            [Sku] => 62991
            [Qty] => 1
            [Amount] => 34.9500
            [Discount] => 0
            [catalog] => 0202
        )

    [4] =>
        (
            [name] => JEANS PARA DAMA
            [Sku] => 116315
            [Qty] => 1
            [Amount] => 32.9500
            [Discount] => 0
            [catalog] => 0203
        )
## Time limit
