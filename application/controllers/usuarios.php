<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Usuarios extends CI_Controller {
    public function index()//carga el login
	{
		if($this->session->userdata('login'))
		{
			redirect('usuarios/panel','refresh');
		}
		else
		{			
			$data['msg']=$this->uri->segment(3);//aqui se le recupera el numerito que esta luedo del metodo, el tercer segmento de la url
			$this->load->view('login',$data);
		}
	}	

	public function validarusuarios()//valida el usuario y redirige al panel
	{
		$login=$_POST['login'];
		$password=md5($_POST['password']);

		$consulta=$this->usuario_model->validar($login,$password);

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result()as $row)
			{
				$this->session->set_userdata('idusuario',$row->idUsuario);
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);
				redirect('usuarios/panel','refresh');
			}
		}
		else
		{
			redirect('usuarios/index/1','refresh');
		}
	}

	
	public function panel()//redireccion al panel estudiante
	{
		if($this->session->userdata('login'))
		{
			$tipo=$this->session->userdata('tipo');
			if($tipo=='Administrador')
			{
				redirect('estudiantelte/indexlte','refresh');
			}
			else 
			{
				if($tipo=='Docente')
				{
					redirect('estudiantelte/invitadolte','refresh');
				}
				else
				{
					redirect('estudiantelte/personalte','refresh');
				}
				
			}
		}
		else
		{
			redirect('usuarios/index/2','refresh');
		}
	}

	public function logout()//este que cierra la session
	{
		$this->session->sess_destroy();
		redirect('usuarios/index/3','refresh');
	}
}
?>
