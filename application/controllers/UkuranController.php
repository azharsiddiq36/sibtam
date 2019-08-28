<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class UkuranController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UkuranModel');
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Ukuran";
        $data['data'] = parent::model('UkuranModel')->get_ukuran()->result();
        parent::template('ukuran/index',$data);
    }
    //Tambah Ukuran
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("ukuran_nama");



                $data = array(
                    "ukuran_nama"=>$nama,
                );
                parent::model("UkuranModel")->post_ukuran($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/ukuran");

        }
        else{
            $data['title'] = "Form Tambah Ukuran";
            parent::template('ukuran/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("ukuran_nama");


            $data = array(
                "ukuran_nama"=>$nama,
            );
            parent::model("UkuranModel")->editUkuran($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/ukuran");
        }
        else{
            $data['title'] = "Form Edit Ukuran";
            $param = array('ukuran_id'=>$id);
            $data['akses'] = array("administrator","ukuran");
            $data['row'] = parent::model("UkuranModel")->getOne($param);
            parent::template('ukuran/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("ukuran_id");

        $param = array("ukuran_id"=>$id);
        $isi = parent::model("UkuranModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Ukuran";
        $id = $this->uri->segment(4);
        $data = array("ukuran_id"=>$id);
        parent::model("UkuranModel")->deleteUkuran($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/ukuran");
    }
}
