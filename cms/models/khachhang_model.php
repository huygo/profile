<?php
class khachhang_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }

   function getFetObj($tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR nhan_xet LIKE '%" . $tukhoa . "%' ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT * FROM " . khachhang . " $dieukien ORDER BY id DESC");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function addObj($data)
   {
       $query = $this->insert(khachhang, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query = $this->update(khachhang, $data, "id = $id");
       return $query;
   }


   function delObj($id)
   {
       $query = $this->delete(khachhang, "id=$id");
       return $query;
   }

}
?>
