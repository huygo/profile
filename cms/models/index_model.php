<?php
class index_model extends model
{
	 function __construction()
	 {
			 parent::__construction();
	 }
	 function checkold($userid, $password)
	 {
			 $query = $this->db->query("SELECT COUNT(id) AS total FROM admin WHERE id=$userid AND password = '$password' ");
			 $row   = $query->fetchAll(PDO::FETCH_ASSOC);
			 if ($row[0]['total'] == 1)
					 return true;
			 else
					 return false;
	 }
	 function changepass($userid,$newpass)
	 {
			 $query = $this->db->query("UPDATE admin SET password='$newpass'
							 WHERE id=$userid ");
			 return $query;
	 }
}
?>
