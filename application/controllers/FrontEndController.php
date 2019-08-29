<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class FrontEndController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('AuthModel');
		}
        public function index()
        {
            $data['title'] = 'Admin Index';
            $data['page_title'] = '';
            $data['menu'] = '';
            parent::frontend('frontend/index',$data);
        }
		
	}