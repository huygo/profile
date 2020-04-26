<?php
class model
{
   function __construct()
   {
       $this->db = new database();
       define("danhmuc", '1_blog');
       define("baiviet", '1_baiviet');
       define("banner", '1_banner');
       define("cate", '1_cate');
       define("sanpham", '1_sanpham');
       define("khachhang", '1_khachhang');
       define("donhang", '1_donhang');
       define("item", '1_items');
       define("menu", '1_menu');
       define("dmtemp", '1_dmtemp');
       define("media", '1_media');
       define("temp", '1_template');
       define("thongtin", '1_thongtin');
       define("kinhnghiem", '1_kinhnghiem');
       define("quatrinh", '1_quatrinh');
   }

   function getpage($url)
   {
      $page= array();
      if ($url[0]=='blog')
          if (sizeof($url)==2){
              $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE url='".$url[1]."' ");
              $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
              $page['title']       = $temp[0]['name'];
              $page['description'] = $temp[0]['mo_ta'];
              $page['keywords']    = $temp[0]['keywords'];
              $page['image']       = $temp[0]['hinh_anh'];
              $page['data']        = $temp[0];
          } else {
              $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE url='".$url[2]."' ");
              $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
              $page['title']       = $temp[0]['name'];
              $page['description'] = $temp[0]['mo_ta'];
              $page['keywords']    = $temp[0]['keywords'];
              $page['image']       = $temp[0]['hinh_anh'];
              $page['data']        = $temp[0];
          }
      elseif ($url[0]=='product')
          if(sizeof($url)==2) {
              $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE url='".$url[1]."' ");
              $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
              $page['title']       = $temp[0]['name'];
              $page['description'] = $temp[0]['mo_ta'];
              $page['keywords']    = $temp[0]['keywords'];
              $page['image']       = $temp[0]['hinh_anh'];
              $page['data']        = $temp[0];
          } else {
              $query = $this->db->query("SELECT * FROM " . cate . " WHERE url='".$url[2]."' ");
              $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
              $page['title']       = $temp[0]['name'];
              $page['description'] = $temp[0]['mo_ta'];
              $page['keywords']    = $temp[0]['keywords'];
              $page['image']       = $temp[0]['hinh_anh'];
              $page['data']        = $temp[0];
          }
      else  {
          $query = $this->db->query("SELECT * FROM " . thongtin );
          $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
          $page['title']       = $temp[0]['time1'];
          $page['description'] = $temp[0]['gioi_thieu'];
          $page['keywords'] = $temp[0]['time2'];
          $page['image']       = $temp[0]['logo'];
      }
      return $page;
   }

   function thongtin()
   {
       $query = $this->db->query("SELECT * FROM ".thongtin );
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp[0];
   }

   function kinhnghiem()
   {
       $query = $this->db->query("SELECT * FROM ".kinhnghiem );
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp[0];
   }

   function quatrinh1()
   {
       $query = $this->db->query("SELECT * FROM " . quatrinh . " WHERE loai=0");
      return  $query->fetchAll(PDO::FETCH_ASSOC);

   }

   function quatrinh2()
   {
       $query = $this->db->query("SELECT * FROM " . quatrinh . " WHERE loai=1" );
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

    function nhanxet()
   {
       $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE loai=0" );
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }


    function uudai()
   {
       $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE loai=1 ORDER BY id DESC LIMIT 3" );
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

    function uudai1()
   {
       $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE loai=1 ORDER BY id DESC LIMIT 6" );
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function topmenu()
   {
       $query = $this->db->query("SELECT *
          FROM " . menu . " a WHERE tinh_trang=1 AND cha=0 ORDER BY thu_tu ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }
   // IF(phan_loai=1,(SELECT CONCAT('blog/',url) FROM " . baiviet . " WHERE id=a.url),
   //   IF(phan_loai=2,(SELECT CONCAT('blog/',url) FROM " . danhmuc . " WHERE id=a.url),
   //     IF(phan_loai=3,(SELECT CONCAT('product/',url) FROM " . sanpham . " WHERE id=a.url),
   //       IF(phan_loai=4,(SELECT CONCAT('product/1/',url) FROM " . cate . " e WHERE id=a.url),
   //         IF(phan_loai=5,(SELECT CONCAT('template/',url) FROM " . cate . " e WHERE id=a.url),url))))) AS link
   // IF(phan_loai=1,(SELECT hinh_anh FROM " . baiviet . " WHERE id=a.url),
   //   IF(phan_loai=2,(SELECT hinh_anh FROM " . danhmuc . " WHERE id=a.url),
   //     IF(phan_loai=3,(SELECT hinh_anh FROM " . sanpham . " WHERE id=a.url),
   //       IF(phan_loai=4,(SELECT hinh_anh FROM " . cate . " WHERE id=a.url),'')))) AS hinhanh

   function submenu($cha,$type)
   {
       $temp=array();
       if ($type==4) {
          $query = $this->db->query("SELECT *, CONCAT('product/1/',url) AS link  FROM " . cate . " WHERE tinh_trang=1 AND cha=$cha ORDER BY thu_tu ");
          $temp = $query->fetchAll(PDO::FETCH_ASSOC);
          if (sizeof($temp)==0) {
            $query = $this->db->query("SELECT *, CONCAT('product/',url) AS link  FROM " . sanpham . " WHERE tinh_trang=1 AND danh_muc=$cha ORDER BY luot_xem ");
            $temp = $query->fetchAll(PDO::FETCH_ASSOC);
          }
       } elseif ($type==2) {
          $query = $this->db->query("SELECT *, CONCAT('blog/1/',url) AS link  FROM " . danhmuc . " WHERE tinh_trang=1 AND cha=$cha ORDER BY thu_tu ");
          $temp = $query->fetchAll(PDO::FETCH_ASSOC);
          if (sizeof($temp)==0) {
            $query = $this->db->query("SELECT *, CONCAT('blog/',url) AS link  FROM " . baiviet . " WHERE tinh_trang=1 AND danh_muc=$cha ORDER BY luot_xem ");
            $temp = $query->fetchAll(PDO::FETCH_ASSOC);
          }
       } else {
         $query = $this->db->query("SELECT *, CONCAT('template/',url) AS link  FROM " . dmtemp . " WHERE tinh_trang=1 AND cha=14 ORDER BY thu_tu ");
         $temp = $query->fetchAll(PDO::FETCH_ASSOC);
       }
       return $temp;
   }

   function homeblog($com)
   {
       $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1 AND com=$com ORDER BY thu_tu ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function homepost($com)
   {
       $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND com=$com ORDER BY luot_xem DESC ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function homecate($com)
   {
     if ($com>0)
        $query = $this->db->query("SELECT *, CONCAT('product/1/',url) AS link FROM " . cate . " WHERE tinh_trang=1 AND com=$com ");
    else
        $query = $this->db->query("SELECT *, CONCAT('product/1/',url) AS link FROM " . cate . " WHERE tinh_trang=1 AND cha>0 ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function hometab()
   {
     $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1
        AND danh_muc IN (SELECT id FROM ".cate." WHERE tinh_trang=1 AND com=1) AND com=3
        ORDER BY luot_xem DESC ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function danhmucbaiviet()
   {
       $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1  ");
       $temp = $query->fetchAll(PDO::FETCH_ASSOC);
       foreach ($temp as $key=>$item) {
            $id = $item['id'];
            $query = $this->db->query("SELECT COUNT(1) AS total FROM " . baiviet . "
                WHERE tinh_trang=1 AND (blog LIKE '$id' OR blog LIKE '$id,%' OR blog LIKE '%,$id' OR blog LIKE '%,$id,%') ");
            $baiviet = $query->fetchAll(PDO::FETCH_ASSOC);
            $temp[$key]['total']=$baiviet[0]['total'];
       }
       return $temp;
   }


   function baivietmoi()
   {
     $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY id DESC LIMIT 6 ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }
   function nhanvien()
   {
     $query = $this->db->query("SELECT name, hinh_anh,quote,chuc_vu FROM admin WHERE id!=1 ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function homeprod($com)
   {
     $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 AND com=$com ORDER BY luot_xem DESC ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getbanner($com)
   {
       $query = $this->db->query("SELECT * FROM " . banner . " WHERE tinh_trang=1 AND com=$com ORDER BY thu_tu");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function homecomment()
   {
     $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE tinh_trang=1 LIMIT 3  ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function khachhang($otp)
   {
     $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE mat_khau='$otp'  ");
     return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function getprod($danhmuc)
   {
       $dieukien = " WHERE tinh_trang=1  AND  (danh_muc LIKE '".$danhmuc."' OR danh_muc LIKE '%,".$danhmuc."' OR danh_muc LIKE '".$danhmuc.",%' OR danh_muc LIKE '%,".$danhmuc.",%')  ";
       // $query = $this->db->query("SELECT *, CONCAT('product/',url) AS link
       //    FROM ".sanpham."  $dieukien ORDER BY ngay_cap_nhat ");
       $query = $this->db->query("SELECT * FROM ".sanpham." $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp;
   }

   function gettemp($danhmuc)
   {
       $dieukien = " WHERE tinh_trang=1  AND  (danh_muc LIKE '".$danhmuc."' OR danh_muc LIKE '%,".$danhmuc."' OR danh_muc LIKE '".$danhmuc.",%' OR danh_muc LIKE '%,".$danhmuc.",%')  ";
       $query = $this->db->query("SELECT * FROM ".temp." $dieukien ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp;
   }

   function getpost($danhmuc)
   {
       $dieukien = " WHERE tinh_trang=1  AND  (blog LIKE '".$danhmuc."' OR blog LIKE '%,".$danhmuc."' OR blog LIKE '".$danhmuc.",%' OR blog LIKE '%,".$danhmuc.",%')  ";
       $query = $this->db->query("SELECT *
          FROM ".baiviet."  $dieukien ORDER BY ngay_cap_nhat DESC ");
       $temp  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp;
   }


   function category()
   {
       $query = $this->db->query("SELECT id, name, cha, url, CONCAT('product/1/',url) AS link
            FROM " . cate . " WHERE tinh_trang=1 ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function productdetail($id)
   {
       $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE id=$id ");
       $temp = $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp[0];
   }

   function spnoibat()
   {
       $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 ");
       return  $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function donhang($cart){
       $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE id in (".$cart.") ");
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   function checkspam($session,$email)
   {
       $query = $this->db->query("SELECT COUNT(id) AS total FROM " . khachhang . " WHERE session_id='$session' OR email='$email' ");
       $temp =  $query->fetchAll(PDO::FETCH_ASSOC);
       if ($temp[0]['total']>0)
          return true;
       else
          return false;
   }

   function user($email,$passwd)
   {
       $user = array();
       $query = $this->db->query("SELECT email,dien_thoai,ho_ten,hinh_anh FROM " . khachhang . "
       WHERE email='$email' AND mat_khau='$passwd' ");
       $user =  $query->fetchAll(PDO::FETCH_ASSOC);
       return $user;
   }

   function setpass($password,$retype,$id)
   {
       $ok = false;
       if ($password == $retype) {
          $data = array('mat_khau'=> md5(md5($password)),'tinh_trang'=>1);
          $ok=$this->update(khachhang,$data," id=$id ");
       }
       return $ok;
   }

   function sendmail($hoten,$combo, $soluong, $dienthoai,$diachi,$otp)
   {
       $ok = false;
       $date = date('Y-m-d H:i:s');
       $data = array(
            'ngay_gio' => $date,
            'ho_ten' => $hoten,
            'dien_thoai' => $dienthoai,
            'dia_chi' => $diachi,
            'goi_sp' => $combo,
            'so_luong' => $soluong,
            'ma_don_hang' => $otp,
            'tinh_trang' => 1
       );
       if($this->insert(khachhang,$data)) {
         require_once 'libs/Mailin.php';
         $mailin = new Mailin('marketing@vdata.com.vn', 'A1Pm7zvwb0OH3RDq');
         $mailin->
           addTo('hai@vdata.com.vn','VDATA')->
           setFrom('marketing@vdata.com.vn', 'muathaoduoc')->
           setReplyTo('marketing@vdata.com.vn','muathaoduoc')->
           setSubject('FUDI: Khách hàng đặt hàng online')->
           setHtml('
           <!DOCTYPE html>
           <html lang="en">
           <head>
             <meta charset="utf-8">
             <title>Khách hàng đặt hàng sản phẩm FUDI</title>
             <meta name="viewport" content="width=device-width">
             <style>
         @import url(normalize);body{font-family:Arial,Helvetica,sans-serif;color:#333}a:link{color:#2469a0}a:visited{color:#1b4e76}a:active,a:hover{color:#d03c0f}h1{font-size:2em;line-height:1.3em;color:#2469a0}h2{font-size:1.5em;line-height:1.3em;color:#2469a0}h3{font-size:1.17em;line-height:1.3em}hr{border:0;border-bottom:1px solid #ccc}img{max-width:100%}.code{font-weight:700;color:#d03c0f}.site-title{display:inline-block;font-size:3em;line-height:48px;color:#d03c0f;margin:0 .25em 0 0}.claim{font-size:2em;margin:.5em 0 1em 0}.container{width:62em;margin:2em auto;max-width:100%;text-align:center}.cta{margin:2em 0}.btn{display:inline-block;margin:.25em;padding:10px 16px;font-size:1.15em;line-height:1.33;border-radius:6px;text-align:center;white-space:nowrap;vertical-align:middle;text-decoration:none}.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}.btn-primary:hover{background-color:#d03c0f;color:#fff}.btn-secondary{background-color:#ddd;border-color:#ccc}.btn-secondary:hover{background-color:#ccc;color:#333}.about{margin:1em auto}.about td{text-align:left}.about td:first-child{width:80px}@media screen and (max-width:600px){img{height:auto!important}}@media screen and (max-width:400px){body{font-size:14px}}@media screen and (max-width:320px){body{font-size:12px}}
             </style>
           </head>
           <body>
             <div class="container">
               <div class="cta">
                  Họ tên: '.$hoten.' <br>
                  Địa chỉ nhận hàng: '.$diachi.' <br>
                  Số điện thoại: '.$dienthoai.' <br>
                  Mã đơn hàng: '.$otp.' <br>
                  Gói sản phẩm: '.$combo.' <br>
                  Số lượng: '.$soluong.' <br>
               </div>
               <table border="0" cellpadding="0" cellspacing="0" align="center" class="about">
                 <tr>
                   <td>Hotline</td>
                   <td><a href="tel:02477778666">(024) 7777 8666</a></td>
                 </tr>
                 <tr>
                   <td>Email</td>
                   <td>info@vdata.com.vn</td>
                 </tr>
                 <tr>
                   <td>Website</td>
                   <td><a href="'.HOME.'" target="_blank">www.velo.vn</a></td>
                 </tr>
               </table>
               <p>Nội dung email này là riêng tư và không được phép tiết lộ. Nếu bạn nhận được email này do nhầm lẫn, vui lòng xóa bỏ hoặc thông báo lại cho chúng tôi qua địa chỉ email  <a href="mailto:info@vdata.com.vn" target="_blank">info@vdata.com.vn</a><br> Chân thành cảm ơn!</p>
             </div>
           </body>
           </html>
           ');
           $res = $mailin->send();
           $ok = true;
      }
      return $ok;
   }

   function savemail($hoten,$dienthoai,$email,$yeucau)
   {
       $ok = false;
       $date = date('Y-m-d H:i:s');
       $data = array(
            'ngay_gio' => $date,
            'ho_ten' => $hoten,
            'dien_thoai' => $dienthoai,
            'email' => $email,
            'comment' => $yeucau,
            'tinh_trang' => 0
       );
       $ok = $this->insert(khachhang,$data);
       require_once 'libs/Mailin.php';
       $mailin = new Mailin('marketing@vdata.com.vn', 'A1Pm7zvwb0OH3RDq');
       $mailin->
         addTo('hai@vdata.com.vn','VDATA')->
         setFrom('marketing@vdata.com.vn', 'VELO Software')->
         setReplyTo('marketing@vdata.com.vn','VELO Softwre')->
         setSubject('VELO: Khách hàng gửi yêu cầu từ website')->
         setHtml('
         <!DOCTYPE html>
         <html lang="en">
         <head>
           <meta charset="utf-8">
           <title>Email đăng ký tài khoản VELO</title>
           <meta name="viewport" content="width=device-width">
           <style>
       @import url(normalize);body{font-family:Arial,Helvetica,sans-serif;color:#333}a:link{color:#2469a0}a:visited{color:#1b4e76}a:active,a:hover{color:#d03c0f}h1{font-size:2em;line-height:1.3em;color:#2469a0}h2{font-size:1.5em;line-height:1.3em;color:#2469a0}h3{font-size:1.17em;line-height:1.3em}hr{border:0;border-bottom:1px solid #ccc}img{max-width:100%}.code{font-weight:700;color:#d03c0f}.site-title{display:inline-block;font-size:3em;line-height:48px;color:#d03c0f;margin:0 .25em 0 0}.claim{font-size:2em;margin:.5em 0 1em 0}.container{width:62em;margin:2em auto;max-width:100%;text-align:center}.cta{margin:2em 0}.btn{display:inline-block;margin:.25em;padding:10px 16px;font-size:1.15em;line-height:1.33;border-radius:6px;text-align:center;white-space:nowrap;vertical-align:middle;text-decoration:none}.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}.btn-primary:hover{background-color:#d03c0f;color:#fff}.btn-secondary{background-color:#ddd;border-color:#ccc}.btn-secondary:hover{background-color:#ccc;color:#333}.about{margin:1em auto}.about td{text-align:left}.about td:first-child{width:80px}@media screen and (max-width:600px){img{height:auto!important}}@media screen and (max-width:400px){body{font-size:14px}}@media screen and (max-width:320px){body{font-size:12px}}
           </style>
         </head>
         <body>
           <div class="container">
             <div class="banner">
               <a href="'.HOME.'"><img src="https://velo.vn/uploads/logo-velo-software.png"  border="0" alt="VELO Software"></a>
             </div>
             <div class="cta">
                <ul>
                    <li>'.$hoten.'</li>
                    <li>'.$dienthoai.'</li>
                    <li>'.$email.'</li>
                    <li>'.$yeucau.'</li>
                </ul>
             </div>
             <table border="0" cellpadding="0" cellspacing="0" align="center" class="about">
               <tr>
                 <td>Hotline</td>
                 <td><a href="tel:02477778666">(024) 7777 8666</a></td>
               </tr>
               <tr>
                 <td>Email</td>
                 <td>info@vdata.com.vn</td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><a href="'.HOME.'" target="_blank">www.velo.vn</a></td>
               </tr>
             </table>
             <p>Nội dung email này là riêng tư và không được phép tiết lộ. Nếu bạn nhận được email này do nhầm lẫn, vui lòng xóa bỏ hoặc thông báo lại cho chúng tôi qua địa chỉ email  <a href="mailto:info@vdata.com.vn" target="_blank">info@vdata.com.vn</a><br> Chân thành cảm ơn!</p>
           </div>
         </body>
         </html>
         ');
      $res = $mailin->send();
      $ok = $res['result'];
      return $ok;
   }

//------------------- hàm thao tác trên database ---------------
   function insert($table, $array)
   {
       $cols = array();
       $bind = array();
       foreach ($array as $key => $value) {
           $cols[] = $key;
           $bind[] = "'" . $value . "'";
       }
       $query = $this->db->query("INSERT IGNORE INTO " . $table . " (" . implode(",", $cols) . ")
         VALUES (" . implode(",", $bind) . ")");
       return $query;
   }

   function update($table, $array, $where)
   {
       $set = array();
       foreach ($array as $key => $value) {
           $set[] = $key . " = '" . $value . "'";
       }
       $query = $this->db->query("UPDATE " . $table . " SET " . implode(",", $set) . " WHERE " . $where);
       return $query;
   }

}
?>
