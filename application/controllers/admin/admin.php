<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['page_title'] 		= 'Dashboard Guru';
		$data['page_heading']		= 'Dashboard';


    $this->load->view('admin/pages/header', $data);
    $this->load->view('admin/pages/menu');
    $this->load->view('admin/index', $data);
    $this->load->view('admin/pages/footer');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */