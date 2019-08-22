<?php
	
	class PenggunaModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_pengguna";
        }
        public function get_pengguna()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_pengguna($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editPengguna($id,$data){
            return parent::update_table($this->initTable(),"pengguna_id",$id,$data);
        }
        public function deletePengguna($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function checkMail($data){
            return parent::get_object_of_row($this->initTable(),$data);
        }

    }