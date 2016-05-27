<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class evento extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('evento_model','evento');
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('evento_view');
	}
	public function ajax_list()
	{
		$list = $this->evento->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $evento) {
			$no++;
			$row = array();
			$row[] = $evento->nombre_evento;
			$row[] = $evento->nombre_artista;
			$row[] = $evento->tipo_evento;
			$row[] = $evento->tipo_entrada;	
			$data[] = $row;
		}
		$output = array(					
						"data" => $data,
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->evento->count_all(),
						"recordsFiltered" => $this->evento->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


}