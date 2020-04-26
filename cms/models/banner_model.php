<?php
class banner_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }

   function getFetObj($tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT * FROM " . banner . " $dieukien ORDER BY com, thu_tu ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . banner . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function addObj($data)
   {
       $query = $this->insert(banner, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query = $this->update(banner, $data, "id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . banner . " SET tinh_trang=!tinh_trang WHERE id=$id ");
       return $query;
   }

   function delObj($id)
   {
       $query = $this->delete(banner, "id=$id");
       return $query;
   }

}
?>
