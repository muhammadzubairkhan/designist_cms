<?php

class insert_model extends CI_Model {

function __construct() {
	parent::__construct();
}

function form_insert($data) {
	// Inserting in Table(pages) of Database(designist_cms)
	$this->db->insert('pages', $data);
}

}
?>