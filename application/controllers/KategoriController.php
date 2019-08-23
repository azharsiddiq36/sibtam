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
            $password = parent::post("kategori_password");
            $jk = parent::post("kategori_jk");
            $email = parent::post("kategori_email");
            $hak_akses = parent::post("kategori_hak_akses");
            $alamat = parent::post("kategori_alamat");
            $nomor = parent::post("kategori_nomor");
            $data = array("kategori_email"=>$email);
            if (parent::model("KategoriModel")->checkMail($data)->num_rows()<1){
                $data = array(
                    "kategori_status"=>"nonaktif",
                    "kategori_foto"=>"user.png",
                    "kategori_latitude"=>"0",
                    "kategori_longitude"=>"0",
                    "kategori_foto_ktp"=>"belum",
                    "kategori_provinsi"=>"umum",
                    "kategori_kabupaten"=>"umum",
                    "kategori_kecamatan"=>"umum",
                    "kategori_desa"=>"umum",
                    "kategori_nama"=>$nama,
                    "kategori_password"=>md5($password),
                    "kategori_email" =>$email,
                    "kategori_nomor" => $nomor,
                    "kategori_alamat" =>$alamat,
                    "kategori_hak_akses" =>$hak_akses,
                    "kategori_jenis_kelamin"=>$jk
                );
                parent::model("KategoriModel")->post_kategori($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("administrator/kategori");
            }
            else{
                $data['title'] = "Form Tambah Kategori";
                parent::alert("msg","Email Telah Tedaftar !!!");
                parent::template('kategori/tambah_kategori',$data);
            }
        }
        else{
            $data['title'] = "Form Tambah Kategori";
            parent::template('kategori/tambah_kategori',$data);
        }
    }
    public function profile(){
        $data['title'] = "Profile Saya";
        $param = array('kategori_id'=>$this->session->userdata['kategori_id']);
        $data['data'] =  parent::model("KategoriModel")->getOne($param);
        if (isset($_POST['submit'])){
            $nama = parent::post("nama");
            $nomor = parent::post("nomor");
            $email = parent::post("email");
            $password = parent::post("password");
            $alamat = parent::post("alamat");
            $param = null;
            if($password == $data['data']['kategori_password']){
                $param = array(
                    "kategori_nama"=>$nama,
                    "kategori_email" =>$email,
                    "kategori_nomor" => $nomor,
                    "kategori_alamat" =>$alamat,
                  );
            }
            else{
                $param = array(
                    "kategori_nama"=>$nama,
                    "kategori_email" =>$email,
                    "kategori_nomor" => $nomor,
                    "kategori_alamat" =>$alamat,
                    "kategori_password"=>md5($password)
                );
            }
            parent::model("KategoriModel")->editKategori($this->session->userdata['kategori_id'],$param);
            parent::alert("msg","Berhasil Merubah Profile");
            redirect('profile');

        }
        else{
            parent::template('kategori/profile',$data);
        }

    }
    public function edit(){
        $id = $this->uri->segment(4);
        if(isset($_POST['submit'])){
            $nama = parent::post("kategori_nama");
            $jk = parent::post("kategori_jk");
            $email = parent::post("kategori_email");
            $hak_akses = parent::post("kategori_hak_akses");
            $alamat = parent::post("kategori_alamat");
            $nomor = parent::post("kategori_nomor");
            $data = array(
                "kategori_nama"=>$nama,
                "kategori_email" =>$email,
                "kategori_nomor" => $nomor,
                "kategori_alamat" =>$alamat,
                "kategori_hak_akses" =>$hak_akses,
                "kategori_jenis_kelamin"=>$jk
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
            parent::template('kategori/edit_kategori',$data);
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
