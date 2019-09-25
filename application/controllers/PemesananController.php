<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class PemesananController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PemesananModel');
        $this->load->model('TanamanModel');
        parent::setRule();
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Pemesanan";
        $data['data'] = parent::model('PemesananModel')->getJoin()->result();
        parent::template('pemesanan/index',$data);
    }
    //Tambah Pemesanan
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("pemesanan_nama");




                $data = array(
                    "pemesanan_nama"=>$nama,
                );
                parent::model("PemesananModel")->post_pemesanan($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/pemesanan");

        }
        else{
            $data['title'] = "Form Tambah Pemesanan";
            parent::template('pemesanan/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("pemesanan_nama");


            $data = array(
                "pemesanan_nama"=>$nama,
            );
            parent::model("PemesananModel")->editPemesanan($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/pemesanan");
        }
        else{
            $data['title'] = "Form Edit Pemesanan";
            $param = array('pemesanan_id'=>$id);
            $data['akses'] = array("administrator","pemesanan");
            $data['row'] = parent::model("PemesananModel")->getOne($param);
            parent::template('pemesanan/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("pemesanan_id");

        $param = array("pemesanan_id"=>$id);
        $isi = parent::model("PemesananModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Pemesanan";
        $id = $this->uri->segment(4);
        $data = array("pemesanan_id"=>$id);
        parent::model("PemesananModel")->deletePemesanan($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/pemesanan");
    }
}
