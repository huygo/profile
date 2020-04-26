<?php
class baiviet_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }
   function sotrang($rows, $tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT COUNT(id) AS total FROM " . baiviet . " $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ceil($temp[0]['total'] / $rows);
   }

   function getFetObj($sort, $order, $offset, $rows, $tukhoa, $danhmuc)
   {
      $result = array();
      $dieukien = 'WHERE 1';
       if ($tukhoa != '')
           $dieukien.= " AND name LIKE '%".$tukhoa."%' ";
       if ($danhmuc>0)
               $dieukien.= "  AND  (blog LIKE '".$danhmuc."' OR blog LIKE '%,".$danhmuc."' OR blog LIKE '".$danhmuc.",%' OR blog LIKE '%,".$danhmuc.",%')  ";
       $query = $this->db->query("SELECT count(*) as total FROM " . baiviet . " $dieukien");
       $row = $query->fetchAll(PDO::FETCH_ASSOC);
       $result['total'] = $row[0]['total'];

       $query = $this->db->query("SELECT *,
          (SELECT name FROM ".danhmuc." WHERE id IN (blog)) AS danhmuc
          FROM " . baiviet . " $dieukien ORDER BY $sort $order LIMIT $offset, $rows ");
      $result['rows'] =  $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function getdanhsach($danhmuc)
   {
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE id IN ($danhmuc) ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function danhmuc()
   {
       $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1 ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getCom()
   {
       $query = $this->db->query("SELECT id,name FROM " . com . " WHERE loai=1 ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }


   function contactlist($baiviet)
   {
       $ids   = $baiviet['blog'];
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 AND id IN (" . $ids . ") ");
       if ($query)
           return ($query->fetchAll(PDO::FETCH_ASSOC));
       else
           return array();
   }

   function addObj($data)
   {
      if ($data['url']=='')
           $data['url']=$this->makeurl(baiviet,$data['name'],0);
      $query = $this->insert(baiviet, $data);
      return $query;
   }

   function updateObj($id, $data)
   {
      if ($data['url']=='')
            $data['url']=$this->makeurl(baiviet,$data['name'],$id);
       $query=$this->update(baiviet, $data, "id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . baiviet . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
       return $query;
   }

   function delObj($id)
   {
       $query=$this->delete(baiviet,"id = $id");
       return $query;
   }
}
?>
