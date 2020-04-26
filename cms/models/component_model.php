<?php
class component_model extends Model{
    function __construct(){
        parent::__construct();
    }
   
    function getFetObj(){
      	$query = $this->db->query("SELECT * FROM com " );
      	return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getrow($id){
      	$query = $this->db->query("SELECT * FROM com WHERE id=$id " );
      	$temp=$query->fetchAll(PDO::FETCH_ASSOC);
		return($temp[0]);
    }

    function addObj($data){
		$query=$this->insert('com', $data);
        return $query;
    }
    
    function updateObj($id, $data){
        $query = $this->update('com', $data, "id = $id");
        return $query;
    }
    
    function delObj($id){
        $query = $this->db->query("UPDATE com SET tinh_trang=!tinh_trang WHERE id=$id " );
        return $query;
    }
}
?>