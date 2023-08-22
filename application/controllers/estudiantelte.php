<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Estudiantelte extends CI_Controller {
    public function indexlte()
	{	
		if($this->session->userdata('login'))//manera de proteger los datos para solo usuarios logeados
		{
			$lista=$this->estudiantelte_model->listaestudianteslte();
			$data['estudiantes']=$lista;

			$fechaprueba=formatearFecha('2023-06-02 16:00:08');
			$data['fechatest']=$fechaprueba;

			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('est_listalte',$data);
			$this->load->view('inclte/pie');
		}
		else
		{			
			redirect('usuarios/panel/2','refresh');
		}
	}

	public function personalte()
	{	
		if($this->session->userdata('login'))//manera de proteger los datos para solo usuarios logeados
		{
			$lista=$this->persona_model->listaestudiantes();
			$data['estudiante']=$lista;
			
			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('persona',$data);
			$this->load->view('inclte/pie');
		}
		else
		{			
			redirect('usuarios/panel/2','refresh');
		}
	}

	public function subirfoto()
	{	
			$data['idEstudiante']=$_POST['idestudiante'];;

			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('subirfoto',$data);
			$this->load->view('inclte/pie');
	}

	public function subirpos()
	{	
			$data['idEstudiante']=$_POST['idestudiante'];;

			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('subirform',$data);
			$this->load->view('inclte/pie');
	}

	public function subirpdf()
	{	
		$idestudiante=$_POST['idestudiante']; 
		$nombrearchivo=$idestudiante.".pdf";
		$config['upload_path']='./uploads/documentos/';
		$config['file_name']=$nombrearchivo;
		$direccion="./uploads/documentos/".$nombrearchivo;
		if(file_exists($direccion))
		{
			unlink($direccion);
		}
		$config['allowed_types']='pdf';
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload()) 
		{
			$data['error']=$this->upload->display_errors();
		}
		else
		{
			$data['foto']=$nombrearchivo;
			$this->persona_model->modificarestudiante($idestudiante,$data);
			$this->upload->data();
		}
		redirect('estudiantelte/personalte','refresh');
	}
	
	public function subir()
	{	
		$idestudiante=$_POST['idestudiante']; 
		$nombrearchivo=$idestudiante.".jpeg";
		$config['upload_path']='./uploads/estudiantes/';
		$config['file_name']=$nombrearchivo;
		$direccion="./uploads/estudiantes/".$nombrearchivo;
		if(file_exists($direccion))
		{
			unlink($direccion);
		}
		$config['allowed_types']='jpeg';
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload()) 
		{
			$data['error']=$this->upload->display_errors();
		}
		else
		{
			$data['foto']=$nombrearchivo;
			$this->estudiantelte_model->modificarestudiantelte($idestudiante,$data);
			$this->upload->data();
		}
		redirect('estudiantelte/indexlte','refresh');
	}

	public function cursolte()
	{	
		if($this->session->userdata('login'))//manera de proteger los datos para solo usuarios logeados
		{
			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('curso');
			$this->load->view('inclte/pie');
		}
		else
		{			
			redirect('usuarios/panel/2','refresh');
		}
	}
	public function invitadolte()
	{	
		if($this->session->userdata('login'))//manera de proteger los datos para solo usuarios logeados
		{
			$lista=$this->docente_model->listacursoslte();
			$data['cursos']=$lista;

			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('est_invitado',$data);
			$this->load->view('inclte/pie');
		}
		else
		{			
			redirect('usuarios/panel/2','refresh');
		}
	}
	public function agregarlte()
	{
		//mostrar un formulario para agregar un nuevo estudiante
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('est_formulariolte');
		$this->load->view('inclte/pie');
	}

	public function agregarbdlte()
	{
		// atributo BD         formulario
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['nota']=$_POST['nota'];
		

		$this->estudiantelte_model->agregarestudiantelte($data);

		redirect('estudiantelte/indexlte','refresh');
	}

	public function eliminarbdlte()
	{
		$idestudiante=$_POST['idestudiante'];
		$this->estudiantelte_model->eliminarestudiantelte($idestudiante);
		redirect('estudiantelte/indexlte','refresh'); //carga de lista actualizada
	}

	public function modificarlte()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['infoestudiante']=$this->estudiantelte_model->recuperarestudiantelte($idestudiante);

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('est_modificarlte',$data);
		$this->load->view('inclte/pie');
	}

	public function modificarbdlte()
	{
		$idestudiante=$_POST['idestudiante'];

		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['nota']=$_POST['nota'];
		
		$this->estudiantelte_model->modificarestudiantelte($idestudiante,$data);

		redirect('estudiantelte/indexlte','refresh');
	}

	public function deshabilitarbdlte()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='0';

		$this->estudiantelte_model->modificarestudiantelte($idestudiante,$data);

		redirect('estudiantelte/indexlte','refresh');
	}

	public function habilitarbdlte()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['habilitado']='1';

		$this->estudiantelte_model->modificarestudiantelte($idestudiante,$data);

		redirect('estudiantelte/deshabilitadoslte','refresh');
	}

	public function deshabilitadoslte()
	{	
        $lista=$this->estudiantelte_model->listaestudiantesdeslte();
        $data['estudiantes']=$lista;
        
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('est_listadeslte',$data);
		$this->load->view('inclte/pie');
	}

	public function agregarTarealte()
	{
		//mostrar un formulario para agregar un nuevo estudiante
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('est_formulario');
		$this->load->view('inclte/pie');
	}

	public function agregarTareabdlte()
	{
		// atributo BD         formulario
		$data['materia']=$_POST['materia'];
		$data['tareaAsignacion']=$_POST['tareaAsignacion'];
		$data['aula']=$_POST['aula'];

		$this->docente_model->agregartarealte($data);

		redirect('estudiantelte/invitadolte','refresh');
	}
	
}
?>
<?php
//background-color: rgb(184, 205, 216);
?>