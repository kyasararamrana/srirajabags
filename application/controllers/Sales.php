<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	//Sales booking
	public function index()
	{
		$this->load->view('sales');
	}

}
?>
