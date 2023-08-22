<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //linea de seguridad, no admite ejecucion directa de scripts(pordefecto esta en todos los controladores)

//se llama class Welcome, el archivo se llama Welcome.php, tal y como se llama el archivo se debe llamar la clase
//la mayuscula en algunos servidores, la mayuscula sera importante y en otros sera indistinto, en el servidor, en diferentes servidores manejan mayuscula o minusculas, 
//pero algunos solo maneja o Mayusculas o minusculas

//NUESTRA MANERA DE TRABAJO archivos minusculas y clases iniciando con Mayuscula
//una vez creemos un nuevo controlador, cambiaremos el nombre del archivo y de la clase
class Welcome extends CI_Controller {//herencia en PHP

	public function index()//este es un metodo, este metodo se llama index//metodo por defecto
	{
		$this->load->view('welcome_message');//esta linea carga la vista de este controlador
	}

	public function holamundo()
	{
		$this->load->view('saludo');
	}
}
