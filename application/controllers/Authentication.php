<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller 
{

	
	public function index()
	{
        $data = [
			'title' => 'Login'
		];
		$page = 'index';
		$this->_template($page, $data);
	}

	public function forgot()
	{
		$this->_validation();
		if ($this->form_validation->run = false){
			$data = [
				'title' => 'Forgot Password'
			];
			$page = 'forgot';
			$this-> _template($page, $data);
		} else {
			//kirim email reset password
			echo "Kirim email reset password";
		}
	}
	
	private function _validation()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email',
			[
				'required' 		=> '%s wajib diisi'
				'valid_email' 	=> 'Wajib berisi %s yang valid'
			]
		)
	}

	private function _template($page = null, $data = null)
	{
		$this->load->view('auth/template/header', $data);
		$this->load->view('auth/' . $page, $data);
        $this->load->view('auth/template/footer', $data);
	}
}
