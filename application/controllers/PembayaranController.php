<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class PembayaranController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel');
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Pembayaran";
        $data['data'] = parent::model('PembayaranModel')->get_pembayaran()->result();
        parent::template('pembayaran/index',$data);
    }
    //Tambah Pembayaran
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("pembayaran_nama");




                $data = array(
                    "pembayaran_nama"=>$nama,
                );
                parent::model("PembayaranModel")->post_pembayaran($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/pembayaran");

        }
        else{
            $data['title'] = "Form Tambah Pembayaran";
            parent::template('pembayaran/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("pembayaran_nama");


            $data = array(
                "pembayaran_nama"=>$nama,
            );
            parent::model("PembayaranModel")->editPembayaran($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/pembayaran");
        }
        else{
            $data['title'] = "Form Edit Pembayaran";
            $param = array('pembayaran_id'=>$id);
            $data['akses'] = array("administrator","pembayaran");
            $data['row'] = parent::model("PembayaranModel")->getOne($param);
            parent::template('pembayaran/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("pembayaran_id");

        $param = array("pembayaran_id"=>$id);
        $isi = parent::model("PembayaranModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Pembayaran";
        $id = $this->uri->segment(4);
        $data = array("pembayaran_id"=>$id);
        parent::model("PembayaranModel")->deletePembayaran($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/pembayaran");
    }
}
