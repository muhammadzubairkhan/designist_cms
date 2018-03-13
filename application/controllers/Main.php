<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();

		//Including validation library
		$this->load->library('form_validation');

		//Load session library
        $this->load->library('session');

        //Insert model
		$this->load->model('insert_model');

		//View model
		$this->load->model('view_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function add_page()
	{
		$this->load->view('page/pagesCreate');
	}

	public function add_subpage()
	{
		$this->load->view('page/subpagesCreate');
	}

	public function list_page()
	{
		$data['query'] = $this->view_model->pages();
		$this->load->view('page/pagesList', $data);
	}

	public function edit_page()
	{
		$this->load->view('page/pagesEditor');
	}

	public function list_subpage()
	{
		$data['query'] = $this->view_model->subpages();
		$this->load->view('page/subpage/subpagesList', $data);
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
		if (isset($_POST) && !empty($_POST)) {

			//Setting values for table columns
			$data = array(
			'pname' => $this->input->post('page_name'),
			'pslug' => $this->input->post('page_slug'),
			'purl' => $this->input->post('page_url'),
			'pexcerpt' => $this->input->post('page_excerpt'),
			'pcontent' => $this->input->post('page_content'),
			'ppagetype' => 0,
			);

			//Transferring data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Page Added Successfully';

			//Loading View
			$this->load->view('page/pagesEditor', $data);
			//echo 'Success';
		} else {
			$data['message'] = 'Error Occurred';
			$this->load->view('page/pagesEditor', $data);
			//echo 'Failed';
    	}
	}

	public function addSubPage()
	{
		if (isset($_POST) && !empty($_POST)) {

			//Setting values for table columns
			$data = array(
			'pname' => $this->input->post('page_name'),
			'pslug' => $this->input->post('page_slug'),
			'purl' => $this->input->post('page_url'),
			'pexcerpt' => $this->input->post('page_excerpt'),
			'pcontent' => $this->input->post('page_content'),
			'ppagetype' => 1,
			);

			//Transferring data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Sub Page Added Successfully';

			//Loading View
			$this->load->view('page/pagesEditor', $data);
			//echo 'Success';
		} else {
			$data['message'] = 'Error Occurred';
			$this->load->view('page/pagesEditor', $data);
			//echo 'Failed';
    	}
	}

	public function getAllPages()
	{
		// $data['query'] = $this->view_model->pages();
  		// $this->load->view('pagesList', $data);
	}
}
