<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GLOBAL_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * helper lives here
	 * include templating helper, debugging & error helper, core helper
	 * */
	
	// system helper
    public function setRule(){
        $hak = $this->session->userdata['pengguna_hak_akses'];
        if ($hak == null){
            redirect('login');
        }
        else{
            if ($this->uri->segment(1) != $hak){
                redirect(base_url('dashboard'));
            };
        }

    }
	public function model($model)
	{
		return $this->$model;
	}
	public function post($value)
	{
		return $this->input->post($value);
	}
	public function get($value)
	{
		return $this->input->get($value);
	}
	//	templating helper
	public function template($content,$data)
	{
		$this->load->view('templates/template_header', $data);
		$this->load->view($content, $data);
		$this->load->view('templates/template_footer', $data);
	}
    //	templating helper
    public function frontend($content,$data)
    {
        $this->load->view('frontend/template_header', $data);
        $this->load->view($content, $data);
        $this->load->view('frontend/template_footer', $data);
    }
    public function errorPage($content,$data)
    {
        $this->load->view('templates/template_header', $data);
        $this->load->view($content, $data);
        $this->load->view('templates/template_footer', $data);
    }
	public function authPage($content,$data)
	{
		$this->load->view($content,$data);
	}
	public function alert($name,$value)
	{
		$this->session->set_flashdata($name,$value);
	}
	
}
