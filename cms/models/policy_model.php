<?php
class policy_model extends Model{
    function __construct(){
        parent::__construct();
    }

    function sotrang($rows){
		$dieukien = " WHERE tinh_trang=1 ";
      	$query = $this->db->query("SELECT COUNT(id) AS total FROM policy $dieukien " );
		$temp=$query->fetchAll(PDO::FETCH_ASSOC);	
      	return ceil($temp[0]['total']/$rows);
    }    
    
    function getFetObj($sort, $order, $offset, $rows){
		$dieukien = " WHERE tinh_trang=1 ";
      	$query = $this->db->query("SELECT *
			FROM policy $dieukien ORDER BY $sort $order LIMIT $offset, $rows " );
      	return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getrow($id){
      	$query = $this->db->query("SELECT * FROM policy WHERE id=$id " );
      	$temp=$query->fetchAll(PDO::FETCH_ASSOC);
		return($temp[0]);
    }
    
    function addObj($data){
        $query = $this->insert("policy", $data);
        return $query;
    }
    
    function updateObj($id, $data){
        $query = $this->update("policy", $data, "id = $id");
        return $query;
    }
    
    function delObj($id){
		$data = array('tinh_trang' => 0);
        $query = $this->update("policy", $data, "id = $id");
        return $query;
    }
}
?>