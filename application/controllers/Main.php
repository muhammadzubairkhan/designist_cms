<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		//Including validation library
		$this->load->library('form_validation');

		$this->load->model('insert_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function add_page()
	{
		$this->load->view('page/pagesCreate');
	}

	public function list_page()
	{
		$this->load->view('page/pagesList');
	}

	public function edit_page()
	{
		$this->load->view('page/pagesEditor');
	}

	public function list_subpage()
	{
		$this->load->view('page/subpage/subpagesList');
	}

	public function edit_subpage()
	{
		$this->load->view('page/subpage/subpagesEditor');
	}

	public function list_menu()
	{
		$this->load->view('menu/menusList');
	}

	public function edit_menu()
	{
		$this->load->view('menu/menusEditor');
	}

	public function list_submenu()
	{
		$this->load->view('menu/submenu/submenusList');
	}

	public function edit_submenu()
	{
		$this->load->view('menu/submenu/submenusEditor');
	}

	public function addPage()
	{
		if ($this->form_validation->run() == FALSE) {
			$this->edit_page();
			echo 'Failed';
		} else {
			echo 'Success';
			//Setting values for table columns
			$data = array(
			'pname' => $this->input->post('page_name'),
			'pslug' => $this->input->post('page_slug'),
			'purl' => $this->input->post('page_url'),
			'pexcerpt' => $this->input->post('page_excerpt'),
			'pcontent' => $this->input->post('page_content'),
			);

			print_r($data);

			//Transferring data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Page Added Successfully';
			//Loading View
			$this->load->edit_page();
	    }
	}

}
