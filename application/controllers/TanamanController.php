<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class TanamanController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TanamanModel');
        $this->load->model('KategoriModel');
        $this->load->model('UkuranModel');
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Tanaman";
//        $data['data'] = parent::model('TanamanModel')->get_tanaman()->result();
        $data['data'] = parent::model('TanamanModel')->getJoin()->result();
        parent::template('tanaman/index',$data);
    }
    //Tambah Tanaman
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("tanaman_nama");
            $ukuran = parent::post("tanaman_ukuran");
            $kategori = parent::post("tanaman_kategori");
            $harga = parent::post("tanaman_harga_satuan");
            $stok = parent::post("tanaman_stok");
                $data = array(
                    "tanaman_nama"=>$nama,
                    "tanaman_kategori_id"=>$kategori,
                    "tanaman_ukuran_id"=>$ukuran,
                    "tanaman_harga_satuan"=>$harga,
                    "tanaman_stok"=>$stok,
                );
                parent::model("TanamanModel")->post_tanaman($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/tanaman");

        }
        else{
            $data['title'] = "Form Tambah Tanaman";
            $data['kategori'] = parent::model('KategoriModel')->get_kategori()->result();
            $data['ukuran'] = parent::model('UkuranModel')->get_ukuran()->result();
            parent::template('tanaman/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("tanaman_nama");
            $ukuran = parent::post("tanaman_ukuran");
            $kategori = parent::post("tanaman_kategori");
            $harga = parent::post("tanaman_harga_satuan");
            $stok = parent::post("tanaman_stok");
            $data = array(
                "tanaman_nama"=>$nama,
                "tanaman_kategori_id"=>$kategori,
                "tanaman_ukuran_id"=>$ukuran,
                "tanaman_harga_satuan"=>$harga,
                "tanaman_stok"=>$stok,
            );
            parent::model("TanamanModel")->editTanaman($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/tanaman");
        }
        else{
            $data['title'] = "Form Edit Tanaman";
            $param = array('tanaman_id'=>$id);
            $data['kategori'] = parent::model('KategoriModel')->get_kategori()->result();
            $data['ukuran'] = parent::model('UkuranModel')->get_ukuran()->result();
            $data['row'] = parent::model("TanamanModel")->getOne($param);
            parent::template('tanaman/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("tanaman_id");

        $param = array("tanaman_id"=>$id);
        $isi = parent::model("TanamanModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Tanaman";
        $id = $this->uri->segment(4);
        $data = array("tanaman_id"=>$id);
        parent::model("TanamanModel")->deleteTanaman($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/tanaman");
    }
}
