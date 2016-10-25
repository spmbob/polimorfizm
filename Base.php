<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 15:14
 */

class Base {
    function funct() {
        echo "<h2>Функция базового класса</h2>";
    }
    function base_funct() {
        $this->funct();
    }
};
?>