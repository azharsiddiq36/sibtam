<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class FrontEndController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('TanamanModel');
            $this->load->model('KategoriModel');
            $this->load->model('UkuranModel');
            $this->load->model('PemesananModel');
            $this->load->model('PembayaranModel');

		}
        public function index()
        {
            $data['title'] = 'Sistem Informasi Tanaman Obat';
            $data['page_title'] = '';
            $data['data'] = parent::model('TanamanModel')->getJoin()->result();
            parent::frontend('frontend/index',$data);
        }
        public function bayar(){
		    $data['title'] = 'Pembayaran';
		    if (isset($_POST['cek'])){
                $kode = parent::post('kode');
                $param = array('pemesanan_id'=>$kode);
                $data['data'] = parent::model('PemesananModel')->getOne($param);
                $param = array('tanaman_id'=>$data['data']['pemesanan_tanaman_id']);
                $data['tanaman'] = parent::model('TanamanModel')->getOne($param);
                if ($data['data'] == null){
                    parent::alert('tidak','Kode Tidak Ditemukan');
                    parent::frontend('frontend/bayar',$data);
                }
                else{
                    parent::alert('tersedia','Kode Ditemukan');
                    parent::frontend('frontend/bayar',$data);
                }
            }
            else if(isset($_POST['submit'])){
                $pemesanan_id = $this->uri->segment(2);
                $foto  =null;
                $param = array('pemesanan_id'=>$pemesanan_id);
                $data['pemesanan'] = parent::model('PemesananModel')->getOne($param);
                $param = array('tanaman_id'=>$data['pemesanan']['pemesanan_tanaman_id']);
                $data['stok'] = parent::model('TanamanModel')->getOne($param);
                $stok = $data['stok']['tanaman_stok']-$data['pemesanan']['pemesanan_jumlah'];
                $param = array('tanaman_stok'=>$stok);
                parent::model('TanamanModel')->editTanaman($data['stok']['tanaman_id'],$param);
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 204800;
                $this->upload->initialize($config);
                if ( !$this->upload->do_upload('foto')){
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);die;
                }
                else {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/img/upload/' . $this->upload->data('file_name');
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '50%';
                    $config['width'] = 1024;
                    $config['height'] = 768;
                    $config['new_image'] = './assets/img/upload/' . $this->upload->data('file_name');
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $foto = $this->upload->data('file_name');
                    $param = array('pembayaran_pemesanan_id'=>$pemesanan_id,
                        'pembayaran_jumlah'=>$data['pemesanan']['pemesanan_harga'],
                        'pembayaran_foto'=>$foto,
                        'pembayaran_status'=>'selesai');
                    parent::model('PembayaranModel')->post_pembayaran($param);
                }
                parent::alert('msg','Berhasil');
                redirect('pembayaran');
            }
            else{
		        parent::frontend('frontend/bayar',$data);
            }
        }
        public function pesan(){
		    $id = $this->uri->segment(2);
            $data['title'] = 'Pemesanan';
            $data['page_title'] = '';
		    if (isset($_POST['submit'])){
		        $namadepan = parent::post('depan');
		        $belakang   = parent::post('belakang');
		        $nomor = parent::post('nomor');
		        $alamat = parent::post('alamat');
		        $jumlah = parent::post('jumlah');
		        $harga = parent::post('harga');
		        $param = array(
		            'pemesanan_tanaman_id'=>$id,
		            'pemesanan_nama'=>$namadepan.' '.$belakang,
		            'pemesanan_nomor'=>$nomor,
                    'pemesanan_alamat'=>$alamat,
                    'pemesanan_jumlah' => $jumlah,
                    'pemesanan_harga' =>$harga*$jumlah
                );
		        parent::model('PemesananModel')->post_pemesanan($param);
                $param = array("pemesanan_tanaman_id"=>$id,
                    "pemesanan_nama"=>$namadepan.' '.$belakang);
		        $data['pemesanan'] = parent::model('PemesananModel')->getOne($param);

                $param = array("tanaman_id"=>$id);
                $data['data'] = parent::model('TanamanModel')->getOne($param);
                parent::alert('msg','Anda berhasil memesan '.$data['data']['tanaman_nama'].' seharga Rp '.$harga*$jumlah.' ,<br> Catat kode ini ('.$data['pemesanan']['pemesanan_id'].') untuk melakukan pembayaran');
                $param = array("kategori_id"=>$data['data']['tanaman_kategori_id']);
                $data['kategori'] = parent::model('KategoriModel')->getOne($param);
                $param = array("ukuran_id"=>$data['data']['tanaman_ukuran_id']);
                $data['ukuran'] = parent::model('UkuranModel')->getOne($param);
		        parent::frontend('frontend/pesan',$data);
            }else{
                $param = array("tanaman_id"=>$id);
                $data['data'] = parent::model('TanamanModel')->getOne($param);
                $param = array("kategori_id"=>$data['data']['tanaman_kategori_id']);
                $data['kategori'] = parent::model('KategoriModel')->getOne($param);
                $param = array("ukuran_id"=>$data['data']['tanaman_ukuran_id']);
                $data['ukuran'] = parent::model('UkuranModel')->getOne($param);
                parent::frontend('frontend/pesan',$data);
            }
        }


	}