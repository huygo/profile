<?php
class temp_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }
   function getFetObj($sort, $order, $offset, $rows, $tukhoa, $danhmuc)
   {
       $dieukien = " WHERE 1 ";
       if ($tukhoa != '')
           $dieukien.= " AND name LIKE '%".$tukhoa."%' ";
       if ($danhmuc>0)
           $dieukien.= "  AND  (danh_muc LIKE '".$danhmuc."' OR danh_muc LIKE '%,".$danhmuc."' OR danh_muc LIKE '".$danhmuc.",%' OR danh_muc LIKE '%,".$danhmuc.",%')  ";
       $query = $this->db->query("SELECT *,
          (SELECT name FROM ".dmtemp." WHERE id=danh_muc) AS danhmuc
          FROM " . template . " $dieukien ORDER BY id DESC LIMIT $offset, $rows ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function sotrang($rows, $tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT COUNT(id) AS total FROM " . template . " $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ceil($temp[0]['total'] / $rows);
   }


   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . template . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function getdanhsach($danhmuc)
   {
       $query = $this->db->query("SELECT id, name FROM " . dmtemp . " WHERE id IN ($danhmuc) ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getcate()
   {
       $query = $this->db->query("SELECT id, name, cha FROM " . dmtemp . " WHERE tinh_trang=1 ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }


   function danhmuc()
   {
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getCom()
   {
       $query = $this->db->query("SELECT id,name FROM " . com . " WHERE loai=1 ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }


   function contactlist($template)
   {
       $ids   = $template['blog'];
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 AND id IN (" . $ids . ") ");
       if ($query)
           return ($query->fetchAll(PDO::FETCH_ASSOC));
       else
           return array();
   }

   function addObj($data)
   {
       if ($data['url']!='')
          $data['url']=$this->makeurl(template,$data['name'],0);
       $query = $this->insert(template, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query=$this->update(template, $data, "id = $id");
       return $query;
   }

   function delObj($id)
   {
       $query=$this->delete(template,"id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . template . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
       return true;
   }
}
?>
