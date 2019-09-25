<?php


class CetakController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('TanamanModel');
        $this->load->model('PembayaranModel');
        $this->load->model('PemesananModel');
        $this->load->model('UkuranModel');
        $this->load->model('KategoriModel');
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
    function index(){
        $data ['title'] = 'Cetak';
        if (isset($_POST['submit'])){
            $mulai = $this->input->post('tgl_mulai');
            $selesai = $this->input->post('tgl_selesai');
            if ($mulai == $selesai){
                $data ['data'] = $this->PembayaranModel->getNowJoin($mulai)->result();
                $this->load->view('templates/template_header', $data);
                $this->load->view('pembayaran/cetak', $data);
                $this->load->view('templates/template_footer', $data);
            }
            else{
                $data ['data'] = $this->PembayaranModel->getAllJoinDate($mulai,$selesai)->result();
                $this->load->view('templates/template_header', $data);
                $this->load->view('pembayaran/cetak', $data);
                $this->load->view('templates/template_footer', $data);
            }
        }
        else{
            $data ['data'] = $this->PembayaranModel->getJoin()->result();
            $this->load->view('templates/template_header', $data);
            $this->load->view('pembayaran/cetak', $data);
            $this->load->view('templates/template_footer', $data);
        }
    }
    function printData(){

    }

}