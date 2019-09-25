<?php
	
	class PembayaranModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_pembayaran";
        }
        public function get_pembayaran()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_pembayaran($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editPembayaran($id,$data){
            return parent::update_table($this->initTable(),"pembayaran_id",$id,$data);
        }
        public function deletePembayaran($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function getJoin(){
            $sourceTable = array('name'=>$this->initTable(),
                array('pembayaran_pemesanan_id'));//array unique or id source
            $destinationTable = array(
                'table'=>array('tbl_pemesanan'), //array table
                'id'=>array('pemesanan_id'));//array unique or id destination
            return parent::get_join_table($sourceTable,$destinationTable);
        }
        public function getAllJoinDate($mulai,$selesai){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_pemesanan', 'tbl_pembayaran.pembayaran_pemesanan_id = tbl_pemesanan.pemesanan_id');
            $this->db->where('pembayaran_tanggal BETWEEN "'. date('Y-m-d', strtotime($mulai)). '" and "'. date('Y-m-d', strtotime($selesai)).'"');
            $query = $this->db->get();
            return $query;
        }
        public function getNowJoin($date){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_pemesanan', 'tbl_pembayaran.pembayaran_pemesanan_id = tbl_pemesanan.pemesanan_id');
            $this->db->where('date_format(pembayaran_tanggal,"%Y-%m-%d")', $date);
            $query = $this->db->get();
            return $query;
        }

    }