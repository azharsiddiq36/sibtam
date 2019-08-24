<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class TokoController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TokoModel');
    }
    public function index(){
        $data['title'] = "Dashboard";
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Tabel Toko";
        $data['data'] = parent::model('TokoModel')->get_toko()->result();
        parent::template('toko/index',$data);
    }
    //Tambah Toko
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("toko_nama");
            $password = parent::post("toko_password");
            $jk = parent::post("toko_jk");
            $email = parent::post("toko_email");
            $hak_akses = parent::post("toko_hak_akses");
            $alamat = parent::post("toko_alamat");
            $nomor = parent::post("toko_nomor");
                $data = array(
                    "toko_status"=>"nonaktif",
                    "toko_foto"=>"user.png",
                    "toko_latitude"=>"0",
                    "toko_longitude"=>"0",
                    "toko_foto_ktp"=>"belum",
                    "toko_provinsi"=>"umum",
                    "toko_kabupaten"=>"umum",
                    "toko_kecamatan"=>"umum",
                    "toko_desa"=>"umum",
                    "toko_nama"=>$nama,
                    "toko_password"=>md5($password),
                    "toko_email" =>$email,
                    "toko_nomor" => $nomor,
                    "toko_alamat" =>$alamat,
                    "toko_hak_akses" =>$hak_akses,
                    "toko_jenis_kelamin"=>$jk
                );
                parent::model("TokoModel")->post_toko($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/toko");

        }
        else{
            $data['title'] = "Form Tambah Toko";
            parent::template('toko/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("toko_nama");
            $jk = parent::post("toko_jk");
            $email = parent::post("toko_email");
            $hak_akses = parent::post("toko_hak_akses");
            $alamat = parent::post("toko_alamat");
            $nomor = parent::post("toko_nomor");
            $data = array(
                "toko_nama"=>$nama,
                "toko_email" =>$email,
                "toko_nomor" => $nomor,
                "toko_alamat" =>$alamat,
                "toko_hak_akses" =>$hak_akses,
                "toko_jenis_kelamin"=>$jk
            );
            parent::model("TokoModel")->editToko($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("administrator/toko");
        }
        else{
            $data['title'] = "Form Edit Toko";
            $param = array('toko_id'=>$id);
            $data['akses'] = array("administrator","toko");
            $data['row'] = parent::model("TokoModel")->getOne($param);
            parent::template('toko/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("toko_id");

        $param = array("toko_id"=>$id);
        $isi = parent::model("TokoModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Toko";
        $id = $this->uri->segment(4);
        $data = array("toko_id"=>$id);
        parent::model("TokoModel")->deleteToko($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("administrator/toko");
    }
}
