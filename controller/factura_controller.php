<?php

/**
 * Author: Emmanuel Lucio Urbina
 * Date: October 2022

 * Los nombres de los archivos de los controladores seran de la siguiente manera

 * <nombre>_controller.php esto sera la guia para todos, mientras que los nombres
 * de la clase seran en CamelCase para las variables sera snake_case, las funciones 
 * y metodos usaran igualmente CamelCase pero con la primer palabra en minuscula,
 * EjemploClase{};
 * ejemploMethod();
 * ejemplo_variable;
 */
require_once "model/factura.php";
class FacturaController
{
    public function readCFDIMethod()
    {
        require_once "views/info_facturas.php";
    }
}
