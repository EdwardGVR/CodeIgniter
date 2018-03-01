<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller {
    // Lo primero es definir el constructor de la clase
    function __construct(){
        // Ejecutar el control de la clase padre CI_Controlles
        parent::__construct();
        // Los helper se cargan despues de la ejecucion del constructor del padre
        // Al llamar el helper ya no se pone el _helper
        $this->load->helper('mihelper');
    }
    function index () {
        $this->load->library('menu', array('Inicio', 'Contacto', 'Cursos', 'A cerca'));
        $data['mi_menu'] = $this->menu->construirMenu();

        // El metodo load es heredado de la clase CI_Controller
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido', $data);
    }
    function holaMundo () {
        // Se pueden cargar multiples vistas
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }
}