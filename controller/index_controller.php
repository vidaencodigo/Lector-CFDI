<?php

/**
 * Author: Emmanuel Lucio Urbina
 * Date: October 2022

 * Los nombres de los archivos de los controladores seran de la siguiente manera

 * <nombre>_controller.php esto sera la guia para todos, mientras que los nombres
 * de la clase seran en CamelCase para las variables sera snake_case, las funciones 
 * y metodos usaran igualmente CamelCase pero con la primer palabra en minuscula,
 * EjemploClase{};
 * ejemploMetodo();
 * ejemplo_variable;
*/

class IndexController {
    public function indexMethod(){
        require_once "views/index.php";
    }   
}