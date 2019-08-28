<?php
	
	class PemesananModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){ // global table for this model
            return "tbl_pemesanan";
        }
        public function get_pemesanan()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_pemesanan($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editPemesanan($id,$data){
            return parent::update_table($this->initTable(),"pemesanan_id",$id,$data);
        }
        public function deletePemesanan($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function checkMail($data){
            return parent::get_object_of_row($this->initTable(),$data);
        }

    }