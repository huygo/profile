<?php
class donhang_model extends Model
{
   function __construct()
   {
       parent::__construct();
   }

   function getFetObj($tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  name LIKE '%". $tukhoa."%' OR dia_chi LIKE ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT *,
            IF(tinh_trang=1,'Đang xử lý',IF(tinh_trang=2,'Đang chuyển hàng',IF(tinh_trang=3,'Đã nhận','Khách hủy'))) AS tinhtrang
            FROM " . donhang . " $dieukien ORDER by id DESC ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT * FROM " . donhang . " WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   function updateObj($id, $data)
   {
       $query = $this->update(donhang, $data, "id = $id");
       return $query;
   }

   function chitiet($id)
   {
       $query = $this->db->query("SELECT noi_dung FROM " . donhang . " WHERE id=$id ");
       $temp = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp[0]['noi_dung'];
   }
}
?>
