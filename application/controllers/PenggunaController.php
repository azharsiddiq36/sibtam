<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class PenggunaController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel');
        parent::setRule();
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Pengguna";
        $data['data'] = parent::model('PenggunaModel')->get_pengguna()->result();
        parent::template('pengguna/index',$data);
    }
    //Tambah Pengguna
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("pengguna_nama");
            $password = parent::post("pengguna_password");
            $email = parent::post("pengguna_email");
            $alamat = parent::post("pengguna_alamat");
            $nomor = parent::post("pengguna_nomor");
            $data = array("pengguna_email"=>$email);
            if (parent::model("PenggunaModel")->checkMail($data)->num_rows()<1){
                $data = array(
                    "pengguna_nama"=>$nama,
                    "pengguna_password"=>md5($password),
                    "pengguna_email" =>$email,
                    "pengguna_nomor" => $nomor,
                    "pengguna_alamat" =>$alamat,
                    "pengguna_hak_akses" =>'administrator',
                );
                parent::model("PenggunaModel")->post_pengguna($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/pengguna");
            }
            else{
                $data['title'] = "Form Tambah Pengguna";
                parent::alert("msg","Email Telah Tedaftar !!!");
                parent::template('pengguna/tambah',$data);
            }
        }
        else{
            $data['title'] = "Form Tambah Pengguna";
            parent::template('pengguna/tambah',$data);
        }
    }
    public function profile(){
        $data['title'] = "Profile Saya";
        $param = array('pengguna_id'=>$this->session->userdata['pengguna_id']);
        $data['data'] =  parent::model("PenggunaModel")->getOne($param);
        if (isset($_POST['submit'])){
            $nama = parent::post("pengguna_nama");
            $nomor = parent::post("pengguna_nomor");
            $email = parent::post("pengguna_email");
            $alamat = parent::post("pengguna_alamat");
                $param = array(
                    "pengguna_nama"=>$nama,
                    "pengguna_email" =>$email,
                    "pengguna_nomor" => $nomor,
                    "pengguna_alamat" =>$alamat,
                  );
            parent::model("PenggunaModel")->editPengguna($this->session->userdata['pengguna_id'],$param);
            parent::alert("msg","Berhasil Merubah Profile");
            redirect('administrator/profile');
        }
        else if (isset($_POST['ubah'])){
            $password = parent::post('password');
            $repassword = parent::post('repassword');
            if ($password == $repassword){
                $param = array(
                    "pengguna_password"=>md5($password),
                );
                parent::model("PenggunaModel")->editPengguna($this->session->userdata['pengguna_id'],$param);
                parent::alert("msg","Berhasil Merubah Profile");
                redirect('administrator/profile');
            }
            else{
                parent::alert("msg","Pengulangan Kata Sandi Tidak Sesuai");
                redirect('administrator/profile');
            }
        }
        else{
            parent::template('pengguna/profile',$data);
        }

    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("pengguna_nama");

            $email = parent::post("pengguna_email");
            $alamat = parent::post("pengguna_alamat");
            $nomor = parent::post("pengguna_nomor");
            $data = array(
                "pengguna_nama"=>$nama,
                "pengguna_email" =>$email,
                "pengguna_nomor" => $nomor,
                "pengguna_alamat" =>$alamat,
            );
            parent::model("PenggunaModel")->editPengguna($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/pengguna");
        }
        else{
            $data['title'] = "Form Edit Pengguna";
            $param = array('pengguna_id'=>$id);
            $data['akses'] = array("administrator","pengguna");
            $data['row'] = parent::model("PenggunaModel")->getOne($param);
            parent::template('pengguna/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("pengguna_id");

        $param = array("pengguna_id"=>$id);
        $isi = parent::model("PenggunaModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Pengguna";
        $id = $this->uri->segment(4);
        $data = array("pengguna_id"=>$id);
        parent::model("PenggunaModel")->deletePengguna($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/pengguna");
    }
}
