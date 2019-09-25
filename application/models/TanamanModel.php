<?php
	
	class TanamanModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_tanaman";
        }
        public function get_tanaman()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_tanaman($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editTanaman($id,$data){
            return parent::update_table($this->initTable(),"tanaman_id",$id,$data);
        }
        public function deleteTanaman($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function getJoin(){
            $sourceTable = array('name'=>$this->initTable(),
                array('tanaman_kategori_id','tanaman_ukuran_id'));//array unique or id source
            $destinationTable = array(
                'table'=>array('tbl_kategori','tbl_ukuran'), //array table
                'id'=>array('kategori_id','ukuran_id'));//array unique or id destination
            $this->db->order_by('tanaman_nama','asc');
            $query = parent::get_join_table($sourceTable,$destinationTable);
            return $query;
        }
        public function getCount(){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->where('tanaman_stok <= 10');
            $this->db->where('tanaman_stok >= 1');
            $query = $this->db->get();
            return $query;
        }
        public function getstok(){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->where('tanaman_stok <= 1');
            $query = $this->db->get();
            return $query;
        }

    }