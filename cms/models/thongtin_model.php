<?php
class thongtin_model extends model{
    function __construct(){
        parent::__construct();
    }

    function info(){
		$id=1;//$_SESSION['userdata']['meta_id'];
     	$query = $this->db->query("SELECT * FROM ".thongtin." WHERE id=$id " );
     	$temp=$query->fetchAll(PDO::FETCH_ASSOC);
		return($temp[0]);
    return array();
    }

    function updateObj($data){
		$id=1;//$_SESSION['userdata']['meta_id'];
        $query = $this->update(thongtin, $data, "id = $id");
        return $query;
    }

}
?>
