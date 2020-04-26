<?php
class danhmuc_model extends Model
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
       $query = $this->db->query("SELECT * FROM " . danhmuc . " $dieukien ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }



   function getCom()
   {
       $query = $this->db->query("SELECT id,name FROM " . com . " WHERE loai=2 ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function getdanhmuc($id)
   {
       $query = $this->db->query("SELECT id, name, cha FROM " . danhmuc . " WHERE tinh_trang=1 AND id!=$id ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }



   function addObj($data)
   {
       if ($data['url']=='')
          $data['url']=$this->makeurl(danhmuc,$data['name'],0);
       $query = $this->insert(danhmuc, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       if ($data['url']=='')
          $data['url']=$this->makeurl(danhmuc,$data['name'],$id);
       $query = $this->update(danhmuc, $data, "id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . danhmuc . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
       return $query;
   }

   function delObj($id)
   {
       $query = $this->delete(danhmuc, "id=$id");
       return $query;
   }

}
?>
