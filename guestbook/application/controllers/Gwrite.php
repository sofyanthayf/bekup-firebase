<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gwrite extends CI_Controller {

	public function index()
	{
		$this->load->template('gbook/gb_write');
	}
}
