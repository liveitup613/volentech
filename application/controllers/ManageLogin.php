<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageLogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		
		parent::__construct();
		date_default_timezone_set('EST');
	}

	public function index()
	{		
        $this->load->view('be/login/index');
	}
	
	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->select('ID');
		$this->db->where('Name', $username);
		$this->db->where('Password', $password);
		$this->db->from('tbluser');
		$this->db->limit(1);
		$result = $this->db->get()->row_array();

		if ($result == null) {
			redirect('admin');
		}

		$this->session->set_userdata('userId', $result['ID']);

		redirect('admin/faqs');	
	}

	public function logout() {
		$this->session->set_userdata('userID', '');

		redirect('admin');
	}
}