<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *this is the home controller page
 */
 
class Home extends CI_Controller
{
	function _construct()
	{
		parent::_construct();
	}
	public function index()
	{
		$data = array('title' => 'homepage', 'main_content' => 'home_v');
		$this->load->view('template', $data);
	}	
}
