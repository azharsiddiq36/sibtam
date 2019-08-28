<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class KategoriController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Kategori";
        $data['data'] = parent::model('KategoriModel')->get_kategori()->result();
        parent::template('kategori/index',$data);
    }
    //Tambah Kategori
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("kategori_nama");




                $data = array(
                    "kategori_nama"=>$nama,
                );
                parent::model("KategoriModel")->post_kategori($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/kategori");

        }
        else{
            $data['title'] = "Form Tambah Kategori";
            parent::template('kategori/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("kategori_nama");


            $data = array(
                "kategori_nama"=>$nama,
            );
            parent::model("KategoriModel")->editKategori($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/kategori");
        }
        else{
            $data['title'] = "Form Edit Kategori";
            $param = array('kategori_id'=>$id);
            $data['akses'] = array("administrator","kategori");
            $data['row'] = parent::model("KategoriModel")->getOne($param);
            parent::template('kategori/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("kategori_id");

        $param = array("kategori_id"=>$id);
        $isi = parent::model("KategoriModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Kategori";
        $id = $this->uri->segment(4);
        $data = array("kategori_id"=>$id);
        parent::model("KategoriModel")->deleteKategori($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/kategori");
    }
}
