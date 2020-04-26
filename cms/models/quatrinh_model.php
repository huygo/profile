<?php
class quatrinh_model extends Model
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
       $query = $this->db->query("SELECT * FROM " . quatrinh . " $dieukien");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . quatrinh . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function addObj($data)
   {
       $query = $this->insert(quatrinh, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query = $this->update(quatrinh, $data, "id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . quatrinh . " SET tinh_trang=!tinh_trang WHERE id=$id ");
       return $query;
   }

   function delObj($id)
   {
       $query = $this->delete(quatrinh, "id=$id");
       return $query;
   }

}
?>
