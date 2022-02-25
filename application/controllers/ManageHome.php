<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageHome extends CI_Controller {

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

	//	Services
	public function faqs() {
		$this->db->select('*');		
		$this->db->from('tblfaqs');
		$data['questions'] = $this->db->get()->result_array();
		
		$this->load->view('be/home/faqs', $data);
	}
	
	//	Comments
	public function comments() {
		$this->db->select();
		$this->db->from('tblcomments');		
		$data['comments'] = $this->db->get()->result_array();

		$this->load->view('be/home/comments', $data);
	}
	
	//	Articles
	public function articles() {
		$this->db->select('*');        
        $this->db->from('tblarticles');
        $data['articles'] = $this->db->get()->result_array();

        $this->load->view('be/home/articles', $data);
	}

	//	Portfolios
	public function portfolios() {
		$this->db->select();
		$this->db->from('tblportfolios');
		$data['portfolios'] = $this->db->get()->result_array();		
		$this->load->view('be/home/portfolios', $data);
	}

	public function portfolio_edit($ID) {
		if ($ID == 0) {
			$data['Title'] = '';
			$data['Date'] = '';
			$data['Location'] = '';
			$data['ID'] = 0;
			$data['descriptions'] = array();
			$data['Images'] = array();
		}
		else {
			$this->db->select();
			$this->db->from('tblportfolios');
			$this->db->where('ID', $ID);
			$data = $this->db->get()->row_array();

			$this->db->select();
			$this->db->where('PortfolioID', $ID);
			$this->db->from('tblport_descriptions');
			$data['descriptions'] = $this->db->get()->result_array();


			$this->db->select();
			$this->db->from('tblslides');
			$this->db->where('PortfolioID',  $ID);
			$data['Images'] = $this->db->get()->result_array();
		}

		$this->load->view('be/home/portfolio_edit', $data);
	}

	/*
	*	CRUD APIS
	*/


	/*
	*	Questions
	*/
	public function getQuestion() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where("ID", $ID);
		$this->db->from('tblfaqs');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'Question' => $data['Question'],
				'Answer' => $data['Answer']
			)
			);
	}

	public function addQuestion() {
		$data = $this->input->post();

		$id = $this->db->insert('tblfaqs', $data);

		if ($id == false) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'inserted_id' => $id
			)
			);
	}

	public function updateQuestion() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();

		$this->db->where('ID', $ID);
		$this->db->update('tblfaqs', $data);

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	public function deleteQuestion() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblfaqs');

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	/*
	*	Comments
	*/
	public function getComment() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where("ID", $ID);
		$this->db->from('tblcomments');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'data' => $data
			)
			);
	}

	public function addComment() {
		$data = $this->input->post();

		$id = $this->db->insert('tblcomments', $data);

		if ($id == false) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'inserted_id' => $id
			)
			);
	}

	public function updateComment() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();

		$this->db->where('ID', $ID);
		$this->db->update('tblcomments', $data);

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	public function deleteComment() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblcomments');

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	/*
	*	Articles
	*/

	public function addArticle() {
		$resource_data = $this->input->post();
		$date = time();
		$attach = '';

		if (!empty($_FILES["resource"]["name"])) {
            $config['upload_path'] = 'assets/images/articles';
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'article'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $attach = $data['file_name'];
        }

        $resource_data['Image'] = $attach;

		$this->db->set($resource_data);
		$Id = $this->db->insert('tblarticles');

		if ($Id == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}

	public function getArticle() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblarticles');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'data' => $data
		));
	}

	public function updateArticle() {
		$ID = $this->input->post('ID');
		$resource_data = $this->input->post();

		$this->db->select('Image');
		$this->db->where('ID', $ID);
		$this->db->from('tblarticles');
		$resource = $this->db->get()->row_array();

		if ($resource == null) {
			echo json_encode(
				array(
					'success' => false,
					'message' => 'No such resource'
				)
				);
			return;
		}
				
		if (!empty($_FILES["resource"]["name"])) {
			$date = time();
            $config['upload_path'] = 'assets/images/articles';
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'articles'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
			}
			
			if (file_exists('assets/images/articles/'.$resource['Image']))
				unlink('assets/images/articles/'.$resource['Image']);

            $data = $this->upload->data();
			$resource_data['Image'] = $data['file_name'];
        }
		
		
		$this->db->where('ID', $ID);
		$this->db->update('tblarticles', $resource_data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function deleteArticle() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->from('tblarticles');
		$resource = $this->db->get()->row_array();
		if ($resource == null) {
			echo json_encode(array(
				'success' => false
			));
		}

		if (!empty($resource['Image']) && file_exists('assets/images/articles/'.$resource['Image'])) {
			unlink('assets/images/articles/'.$resource['Image']);
		}

		$this->db->where('ID', $ID);
		$this->db->delete('tblarticles');
		$deletedCnt = $this->db->affected_rows();

		if ($deletedCnt == 0) {
			echo json_encode(array(
				'success' => false
			));
		}
		else {
			echo json_encode(array(
				'success' => true
			));
		}	
	}

	// Portfolio

	public function deletePortfolio() {
		$ID = $this->input->post('ID');

		$this->db->where('PortfolioID', $ID);
		$this->db->from('tblslides');
		$slides = $this->db->get()->result_array();
		if ($resource == null) {
			echo json_encode(array(
				'success' => false
			));
		}

		foreach ($slides as $slide) {
			if (!empty($slide['Attach']) && file_exists('assets/images/slides/'.$slide['Attach'])) {
				unlink('assets/images/slides/'.$slide['Attach']);
			}
		}

		$this->db->where('PortfolioID', $ID);
		$this->db->delete('tblslides');

		$this->db->where('ID', $ID);
		$this->db->delete('tblportfolios');
		$deletedCnt = $this->db->affected_rows();

		if ($deletedCnt == 0) {
			echo json_encode(array(
				'success' => false
			));
		}
		else {
			echo json_encode(array(
				'success' => true
			));
		}	
	}

	public function updatePortfolio() {
		$ID = $this->input->post('ID');

        $data = array(
            'Title' => $this->input->post('Title'),
			'Date' => $this->input->post('Date'),
			'Location' => $this->input->post('Location')
        );
		$returnedID = 0;

		if ($ID == '0') {
			$this->db->set($data);
			$this->db->insert('tblportfolios');
			$returnedID = $this->db->insert_id();
		}
		else {
			$this->db->where('ID', $ID);
			$this->db->update('tblportfolios', $data);

			$returnedID = $ID;
		}

		if ($returnedID == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true,
				'ID' => $returnedID
			));
	}

	// Slides

	public function addSlide() {		
		$date = time();
		$attach = '';

		$slideData = $this->input->post();

		if (!empty($_FILES["resource"]["name"])) {
            $config['upload_path'] = 'assets/images/slides/';
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'slide'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $attach = $data['file_name'];
        }

        $slideData['Attach'] = $attach;		

		$this->db->set($slideData);
		$Id = $this->db->insert('tblslides');

		if ($Id == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}

	public function deleteSlide() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->from('tblslides');
		$resource = $this->db->get()->row_array();
		if ($resource == null) {
			echo json_encode(array(
				'success' => false
			));
		}

		if (!empty($resource['Attach']) && file_exists('assets/images/slides/'.$resource['Attach'])) {
			unlink('assets/images/slides/'.$resource['Attach']);
		}

		$this->db->where('ID', $ID);
		$this->db->delete('tblslides');
		$deletedCnt = $this->db->affected_rows();

		if ($deletedCnt == 0) {
			echo json_encode(array(
				'success' => false
			));
		}
		else {
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function getSlide() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblslides');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'data' => $data
		));
	}

	public function updateSlide() {
		$ID = $this->input->post('ID');
		$resource_data = $this->input->post();

		$this->db->select('Attach');
		$this->db->where('ID', $ID);
		$this->db->from('tblslides');
		$resource = $this->db->get()->row_array();

		if ($resource == null) {
			echo json_encode(
				array(
					'success' => false,
					'message' => 'No such resource'
				)
				);
			return;
		}
				
		if (!empty($_FILES["resource"]["name"])) {
			$date = time();
            $config['upload_path'] = 'assets/images/slides/';
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'slide'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
			}
			
			if (file_exists('assets/images/slides/'.$resource['Attach']))
				unlink('assets/images/slides/'.$resource['Attach']);

            $data = $this->upload->data();
			$resource_data['Attach'] = $data['file_name'];
        }
		
		
		$this->db->where('ID', $ID);
		$this->db->update('tblslides', $resource_data);

		echo json_encode(array(
			'success' => true
		));
	}

	/*
	*	Portfolio Description
	*/
	public function getPortfolioDescription() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where("ID", $ID);
		$this->db->from('tblport_descriptions');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'description' => $data
			)
			);
	}

	public function addPortfolioDescription() {
		$data = $this->input->post();

		$id = $this->db->insert('tblport_descriptions', $data);

		if ($id == false) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'inserted_id' => $id
			)
			);
	}

	public function updatePortfolioDescription() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();

		$this->db->where('ID', $ID);
		$this->db->update('tblport_descriptions', $data);

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	public function deletePortfolioDescription() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblport_descriptions');

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	// Add Log

	public function addLog() {
		$Lat = $this->input->post('Lat');
		$Lng = $this->input->post('Lng');
		$Page = $this->input->post("Page");
		$IP = $this->input->ip_address();
		$Date = date('Y-m-d H:i:s');
		$Address = $this->input->post('Address');

		$this->db->insert(
			'tbllog',
			array(
				'IP' => $IP,
				'Lat' => $Lat,
				'Lng' => $Lng,
				'Page' => $Page,
				'Date' => $Date,
				'Address' => $Address
			)
			);
	}
}
