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
            $numberofjoin = 2;
            $sourceTable = array('name'=>$this->initTable(),
                array('tanaman_kategori_id','tanaman_ukuran_id'));//array unique or id source
            $destinationTable = array(
                array('tbl_kategori','tbl_ukuran'), //array table
                array('kategori_id','ukuran_id'));//array unique or id destination
            return parent::get_join_table($numberofjoin,$sourceTable,$destinationTable);
        }

    }