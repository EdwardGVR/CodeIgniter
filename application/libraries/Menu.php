<?php defined('BASEPATH') OR exit('No direct script access allowed');
    // El nombre de la clase debe coincidir con el nombre del archivo, ambos empezando con mayusculas
    class Menu {
        private $arr_menu;
        public function __construct($arr){
            $this->arr_menu = $arr;
        }
        public function construirMenu () {
            $ret_menu = "<nav><ul>";
            foreach($this->arr_menu as $opcion) {
                $ret_menu .= "<li>$opcion.</li>";
            }
            $ret_menu .= "</nav></ul>";
            return $ret_menu;
        }
    }

?>