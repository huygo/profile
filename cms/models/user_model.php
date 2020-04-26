<?php
class user_model extends Model
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
       $query = $this->db->query("SELECT COUNT(id) AS total FROM admin $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ceil($temp[0]['total'] / $rows);
   }

   function getFetObj($sort, $order, $offset, $rows, $tukhoa)
   {
       if ($tukhoa != '')
           $dieukien = "  WHERE  name LIKE '%" . $tukhoa . "%'   ";
       else
           $dieukien = '';
       $query = $this->db->query("SELECT id, name, email, dien_thoai, hinh_anh FROM admin $dieukien   ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getrow($id)
   {
       $query = $this->db->query("SELECT id, name, email, dien_thoai, hinh_anh,quote, chuc_vu FROM admin WHERE id=$id ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return ($temp[0]);
   }

   // function addObj($data)
   // {
   //     $query    = $this->insert("users", $data);
   //     $template = $data['temp_id'];
   //     $query    = $this->db->query("SELECT cate FROM temp WHERE id = $template");
   //     $temp     = $query->fetchAll(PDO::FETCH_ASSOC);
   //     $cate     = $temp[0]['cate'];
   //     $query    = $this->db->query("SELECT loai FROM cate WHERE id = $cate");
   //     $temp     = $query->fetchAll(PDO::FETCH_ASSOC);
   //     $type     = $temp[0]['loai'];
   //     switch ($type) {
   //         case '1':
   //             $dir1 = '' . ROOT_DIR . '/templates/website/' . $cate . '/';
   //             $dir2 = '' . ROOT_DIR . './templates/website/' . $cate . '/' . $template . '/';
   //             if (!file_exists($dir1) && !is_dir($dir1)) {
   //                 mkdir('' . ROOT_DIR . '/templates/website/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/website/' . $cate . '/' . $template . '/coded', 0777, true);
   //             } elseif (!file_exists($dir2) && !is_dir($dir2)) {
   //                 mkdir('' . ROOT_DIR . '/templates/website/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/website/' . $cate . '/' . $template . '/coded', 0777, true);
   //             }
   //             break;
   //         case '2':
   //             $dir1 = '' . ROOT_DIR . '/templates/landingpage/' . $cate . '/';
   //             $dir2 = '' . ROOT_DIR . './templates/landingpage/' . $cate . '/' . $template . '/';
   //             if (!file_exists($dir1) && !is_dir($dir1)) {
   //                 mkdir('' . ROOT_DIR . '/templates/landingpage/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/landingpage/' . $cate . '/' . $template . '/coded', 0777, true);
   //             } elseif (!file_exists($dir2) && !is_dir($dir2)) {
   //                 mkdir('' . ROOT_DIR . '/templates/landingpage/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/landingpage/' . $cate . '/' . $template . '/coded', 0777, true);
   //             }
   //             break;
   //         case '3':
   //             $dir1 = '' . ROOT_DIR . '/templates/freeweb/' . $cate . '/';
   //             $dir2 = '' . ROOT_DIR . './templates/freeweb/' . cate . '/' . $template . '/';
   //             if (!file_exists($dir1) && !is_dir($dir1)) {
   //                 mkdir('' . ROOT_DIR . '/templates/freeweb/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/freeweb/' . $cate . '/' . $template . '/coded', 0777, true);
   //             } elseif (!file_exists($dir2) && !is_dir($dir2)) {
   //                 mkdir('' . ROOT_DIR . '/templates/freeweb/' . $cate . '/' . $template . '/demo', 0777, true);
   //                 mkdir('' . ROOT_DIR . './templates/freeweb/' . $cate . '/' . $template . '/coded', 0777, true);
   //             }
   //             break;
   //         default:
   //             break;
   //     }
   //     return $query;
   // }

   function addObj($data)
   {
       $query = $this->insert("admin", $data);
       return $query;
   }

   function updateObj($id, $data)
   {
       $query = $this->update("admin", $data, "id = $id");
       return $query;
   }

   function delObj($id)
   {
       $query = $this->db->query("UPDATE users SET tinh_trang=!tinh_trang WHERE id=$id ");
       return $query;
   }

}
?>
