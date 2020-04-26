<?php
class dashboard_model extends model{
    function __construct(){
        parent::__construct();
    }

    function getTotal(){
		//$dieukien = " WHERE tinh_trang=2 AND thanh_toan>=DATE_ADD(LAST_DAY(CURDATE() - INTERVAL 1 MONTH),INTERVAL 1 DAY) 
		//	AND thanh_toan<=CURDATE() ";
      	//$query = $this->db->query("SELECT SUM(so_tien-gia_von) AS total FROM donhang $dieukien " );
		//$temp=$query->fetchAll(PDO::FETCH_ASSOC);	
      	//return $temp[0]['total'];
		return 0;
    }    
    
    function getSale(){
//		$dieukien = " WHERE tinh_trang=2 AND thanh_toan>=DATE_ADD(LAST_DAY(CURDATE() - INTERVAL 1 MONTH),INTERVAL 1 DAY) 
//			AND thanh_toan<=CURDATE() ";
//      	$query = $this->db->query("SELECT *
//			FROM donhang $dieukien ORDER BY thanh_toan DESC " );
//      	return $query->fetchAll(PDO::FETCH_ASSOC);
		return array();
    }

	
}
?>