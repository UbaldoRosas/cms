<?php
	$this->load->view('templates/header', $sidebar);
	$this->load->view($section);
	$this->load->view('templates/footer');
?>