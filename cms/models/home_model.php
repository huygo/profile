<?php
class home_model extends Model{
    function __construct(){
        parent::__construct();
    }
   
    function getFetObj(){
      	$query = $this->db->query("SELECT * FROM ".com."   ORDER BY vi_tri " );
      	return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function delObj($id){
		$query = $this->db->query("UPDATE ".com." SET tinh_trang=!tinh_trang WHERE id=$id " );
        return $query;
    }

    function upObj($vitri){
		$query = $this->db->query("SELECT * FROM ".com." WHERE vi_tri<=$vitri  ORDER BY vi_tri DESC LIMIT 2" );
		$temp=$query->fetchAll(PDO::FETCH_ASSOC);
		if (sizeof($temp)==2) {
			$id0=$temp[0]['id'];
			$vitri0=$temp[0]['vi_tri'];
			$id1=$temp[1]['id'];
			$vitri1=$temp[1]['vi_tri'];
			$query = $this->db->query("UPDATE ".com." SET vi_tri=$vitri0 WHERE id=$id1 " );
			$query = $this->db->query("UPDATE ".com." SET vi_tri=$vitri1 WHERE id=$id0 " );
			return $query;
		}
		else
        	return false;
    }
    function downObj($vitri){
		$query = $this->db->query("SELECT * FROM ".com." WHERE vi_tri>=$vitri  ORDER BY vi_tri LIMIT 2" );
		$temp=$query->fetchAll(PDO::FETCH_ASSOC);
		if (sizeof($temp)==2) {
			$id0=$temp[0]['id'];
			$vitri0=$temp[0]['vi_tri'];
			$id1=$temp[1]['id'];
			$vitri1=$temp[1]['vi_tri'];
			$query = $this->db->query("UPDATE ".com." SET vi_tri=$vitri0 WHERE id=$id1 " );
			$query = $this->db->query("UPDATE ".com." SET vi_tri=$vitri1 WHERE id=$id0 " );
			return $query;
		}
		else
        	return false;
    }

    function getCom($id){
      	$query = $this->db->query("SELECT *,
			(SELECT name FROM ".com." WHERE id=$id) AS component
			FROM ".home." WHERE com_id=$id " );
      	return $query->fetchAll(PDO::FETCH_ASSOC);
    }
	
    function delHome($id){
		$query = $this->db->query("UPDATE ".home." SET tinh_trang=!tinh_trang WHERE id=$id " );
        return $query;
    }

    function getHome($id){
      	$query = $this->db->query("SELECT * FROM ".home." WHERE id=$id " );
      	return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function updateObj($id, $data){
        $query = $this->update(home, $data, "id = $id");
        return $query;
    }

    function insertObj($data){
        $query = $this->insert(home, $data);
        return $query;
    }

	
}
?>