<?php
class sanpham_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }
   function getFetObj($sort, $order, $offset, $rows, $tukhoa, $danhmuc)
   {
    $result = array();
       $dieukien = " WHERE 1 ";
       if ($tukhoa != '')
           $dieukien.= " AND name LIKE '%".$tukhoa."%' ";       
       if ($danhmuc>0)
           $dieukien.= "  AND  (danh_muc LIKE '".$danhmuc."' OR danh_muc LIKE '%,".$danhmuc."' OR danh_muc LIKE '".$danhmuc.",%' OR danh_muc LIKE '%,".$danhmuc.",%')  ";
       $query = $this->db->query("SELECT count(*) as total FROM " . sanpham . " $dieukien");
       $row = $query->fetchAll(PDO::FETCH_ASSOC);
       $result['total'] = $row[0]['total'];

       $query = $this->db->query("SELECT *,
          (SELECT name FROM ".cate." WHERE id=danh_muc) AS danhmuc
          FROM " . sanpham . " $dieukien ORDER BY id DESC LIMIT $offset, $rows ");
       $result['rows'] =  $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
   }

   function sotrang($rows, $tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT COUNT(id) AS total FROM " . sanpham . " $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ceil($temp[0]['total'] / $rows);
   }


   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function getdanhsach($danhmuc)
   {
       $query = $this->db->query("SELECT id, name FROM " . cate . " WHERE id IN ($danhmuc) ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getcate()
   {
       $query = $this->db->query("SELECT id, name, cha FROM " . cate . " WHERE tinh_trang=1 ");
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


   function contactlist($sanpham)
   {
       $ids   = $sanpham['blog'];
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 AND id IN (" . $ids . ") ");
       if ($query)
           return ($query->fetchAll(PDO::FETCH_ASSOC));
       else
           return array();
   }

   function addObj($data)
   {
       if ($data['url']!='')
          $data['url']=$this->makeurl(sanpham,$data['name'],0);
       $query = $this->insert(sanpham, $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query=$this->update(sanpham, $data, "id = $id");
       return $query;
   }

   function delObj($id)
   {
       $query=$this->delete(sanpham,"id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . sanpham . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
       return true;
   }
}
?>
