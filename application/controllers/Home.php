<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data = array();

		$this->db->select();
		$this->db->from('tblcomments');
		$data['comments'] = $this->db->get()->result_array();

		$this->db->select();
		$this->db->from('tblarticles');
		$data['articles'] = $this->db->get()->result_array();		

		$this->db->select();
		$this->db->from('tblportfolios');
		$portfolios = $this->db->get()->result_array();

		$portfolios_array = array();
		foreach ($portfolios as $portfolio) {
			$this->db->select();
			$this->db->where('PortfolioID', $portfolio['ID']);
			$this->db->from('tblslides');
			$portfolio['Slides'] = $this->db->get()->result_array();

			array_push($portfolios_array, $portfolio);
		}

		$data['portfolios'] = $portfolios_array;

		$this->load->view('fe/home', $data);
    }

	public function hardware() {
		$this->load->view('fe/hardware');
	}

	public function embedded() {
		$this->load->view('fe/embedded');
	}

	public function software() {
		$this->load->view('fe/software');
	}

    public function aboutUs() {
		$data = array();
        $this->load->view('fe/about-us', $data); 
	}

	public function contactUs() {
		$this->load->library('googlemaps');		

		$config['center'] = '37.3384194733874, -122.01663868654052';
		$config['zoom'] = '17';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = "37.3384194733874, -122.01663868654052";
		$marker['title'] = "Londonderry Office";
		$marker['label'] = "Londonderry Office";
		$marker['infowindow_content'] = "Phone Number : (123)456-7890".										
										"<br>Address : 824 Londonderry Drive Sunnyvale, CA 94087".
										"<br>Email : yugansh@volentech.com";

		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->db->select();
		$this->db->from('tblfaqs');
		$data['questions'] = $this->db->get()->result_array();

		$this->load->view('fe/contact-us', $data);
	}

	public function sendEmail() {
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'systone.webcontacts@gmail.com',
			'smtp_pass' => 'Systoneit$',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
			);

		$this->load->library('email', $config);		

		$this->email->set_newline("\r\n");
		$this->email->from('systone.webcontacts@gmail.com', 'Contact Us');
		$this->email->to('contactus@systoneit.com');
		$this->email->subject('Contact Us');

		$cotent = "Name: <strong>".$name. "</strong><br>Phone: <strong>" . $phone . "</strong><br>Email: <strong>" .$email ."</strong><br>Message:<br><strong>". $message.'</strong>';
		$this->email->message($cotent);

		if ($this->email->send())
		{
			echo "Email was successfully sent.";
		}
		else {  
			show_error($this->email->print_debugger());
		}
	}
}
