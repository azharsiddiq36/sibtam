<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AuthController extends GLOBAL_Controller {
		
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
            //$this->load->view('templates/template_header');
            $this->load->view('auth/login');
        }
		
		public function login()
		{
			$data['title'] = 'Masuk ke Sibtam';
			if (isset($_POST['submit'])){
				$username = parent::post('email');
				$password = parent::post('password');

				$loginData = parent::model('AuthModel')->get_pengguna($username,md5($password));
				$existsStatus = $loginData->num_rows();
				$existsData   = $loginData->row_array();
				if ($existsStatus > 0)
				{
					$sessData = array(
                        'pengguna_id' => $existsData['pengguna_id'],
						'pengguna_nama' => $existsData['pengguna_nama'],
						'pengguna_hak_akses' => $existsData['pengguna_hak_akses'],
                        'pengguna_foto' => $existsData['pengguna_foto'],
                        'pengguna_nomor' => $existsData['pengguna_nomor'],
                        'pengguna_email' => $existsData['pengguna_email'],
                        'pengguna_alamat' => $existsData['pengguna_alamat'],
					);
                    $this->session->set_userdata($sessData);

					if ($existsData['pengguna_hak_akses'] == "administrator"){
                        redirect(site_url('administrator/dashboard'));
                    }
                    else if($existsData['pengguna_hak_akses'] == "pembeli"){
					    redirect('welcome');
                    }
                    else{
                        parent::alert('msg','Hak Akses Kamu Tidak Terdaftar');
					    redirect("login");
                    }
				}else{
					parent::alert('msg','Email atau Password Salah');
					redirect(site_url('login'));
				}
			}else{
				parent::authPage('auth/login',$data);
			}
		}
		public function logout(){
		    if ($this->session->userdata['pengguna_hak_akses'] == 'administrator'){
                session_destroy();
                redirect('login');
            }
            else{
                session_destroy();
                redirect('welcome');
            }

        }
		
		
	}