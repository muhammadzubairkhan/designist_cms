<?php

class View_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function pages() {

		$query = $this->db->get_where('pages', array('ppagetype' => 0)); //pages table data fetching
        return $query->result();
	}

	function subpages() {

		$query = $this->db->get_where('pages', array('ppagetype' => 1)); //subpages table data fetching
        return $query->result();
	}

	function pageByPageId($pageId) {

		$query = $this->db->get_where('pages', array('pid' => $pageId)); //pages table data fetching
        return $query->result();
	}

}
?>