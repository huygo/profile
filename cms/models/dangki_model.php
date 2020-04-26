<?php
class dangki_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }

   function getFetObj($tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  email LIKE '%" . $tukhoa . "%'";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT * FROM " . dangki . " $dieukien ORDER BY id DESC");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . dangki . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function updateObj($id, $data)
   {
       $query = $this->update(dangki, $data, "id = $id");
       return $query;
   }

   function delObj($id)
   {
       $query = $this->delete(dangki, "id=$id");
       return $query;
   }

}
?>
