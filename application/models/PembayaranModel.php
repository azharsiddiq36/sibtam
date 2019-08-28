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
        public function checkMail($data){
            return parent::get_object_of_row($this->initTable(),$data);
        }

    }