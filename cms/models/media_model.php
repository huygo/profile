<?php
class media_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }
   function getFetObj($sort, $order, $offset, $rows, $tukhoa)
   {
       $dieukien = " WHERE 1 ";
       // if ($tukhoa != '')
       //     $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
       // else
       //     $dieukien = '';
       $query = $this->db->query("SELECT *
          FROM " . media . " $dieukien ORDER BY $sort $order LIMIT $offset, $rows ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function addObj($data)
   {
       // if ($data['hinh_anh']!='')
       //      $data['url']=$this->makeurl(media,$data['name'],0);
       $query = $this->insert(media, $data);
       return $query;
   }


   // function sotrang($rows, $tukhoa)
   // {
   //     if ($tukhoa != '')
   //         $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%' OR mo_ta LIKE '%" . $tukhoa . "%' ";
   //     else
   //         $dieukien = '';
   //     $query = $this->db->query("SELECT COUNT(id) AS total FROM " . media . " $dieukien ");
   //     $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
   //     return ceil($temp[0]['total'] / $rows);
   // }


   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . media . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function getpos()
   {
       $query = $this->db->query("SELECT id, name FROM " . pos . " WHERE tinh_trang=1 ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getCom()
   {
       $query = $this->db->query("SELECT id,name FROM " . com . " WHERE loai=1 ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }


   function contactlist($media)
   {
       $ids   = $media['blog'];
       $query = $this->db->query("SELECT id, name FROM " . danhmuc . " WHERE tinh_trang=1 AND id IN (" . $ids . ") ");
       if ($query)
           return ($query->fetchAll(PDO::FETCH_ASSOC));
       else
           return array();
   }


   function updateObj($id, $data,$slide1,$slide2,$slide3,$slide4,$slide5)
   {
       if ($data['url']=='')
         $data['url']=$this->makeurl(media,$data['name'],$id);
       $query=$this->update(media, $data, "id = $id");
       if ($slide1!='') {
         $data=array('slide_1'=>$slide1);
         $query=$this->update(media, $data, "id = $id");
       }
       if ($slide2!='') {
         $data=array('slide_2'=>$slide2);
         $query=$this->update(media, $data, "id = $id");
       }
       if ($slide3!='') {
         $data=array('slide_3'=>$slide3);
         $query=$this->update(media, $data, "id = $id");
       }
       if ($slide4!='') {
         $data=array('slide_4'=>$slide4);
         $query=$this->update(media, $data, "id = $id");
       }
       if ($slide5!='') {
         $data=array('slide_5'=>$slide5);
         $query=$this->update(media, $data, "id = $id");
       }
       return $query;
   }

   function delObj($id)
   {
       $query=$this->delete(media,"id = $id");
       return $query;
   }

   function battat($id)
   {
       $query = $this->db->query("UPDATE " . media . " SET tinh_trang=NOT(tinh_trang) WHERE id=$id ");
       return true;
   }
}
?>
