<?php
class thongtin extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require 'layouts/header.php';
       $this->view->data = $this->model->info();
       $this->view->render('thongtin/index');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $name      = $_REQUEST['name'];
       $diachi    = $_REQUEST['diachi'];
       $dienthoai = $_REQUEST['dienthoai'];
       $email     = $_REQUEST['email'];
       $tenmien   = $_REQUEST['tenmien'];
       $ghichu    = $_REQUEST['gioi_thieu'];
       $facebook  = $_REQUEST['facebook'];
       $twitter   = $_REQUEST['twitter'];
       $instagram = $_REQUEST['instagram'];
       $youtube   = $_REQUEST['youtube'];
       $time1     = $_REQUEST['time1'];
       $time2     = $_REQUEST['time2'];
       $ngaysinh     =date("Y-m-d",strtotime($_REQUEST['ngaysinh']));
       $chucdanh     = $_REQUEST['chucdanh'];
       if ($_REQUEST['logo'] == '') {
           if (isset($_FILES['hinh_anh']['name']) && ($_FILES['hinh_anh']['name'] != '')) {
               $dir  = ROOT_DIR . '/uploads/';
               $file = functions::uploadfile('hinh_anh', $dir, $name);
               //$file = $this->vdata->uploadfile('hinh_anh',$dir,$name);
               $logo = HOME . '/uploads/' . $file;
           } else
               $logo = 'http://via.placeholder.com/360x225';
       } else
           $logo = $_REQUEST['logo'];
       $_SESSION['userdata']['logo'] = $logo;
       $data                         = array(
           'name' => $name,
           'dia_chi' => $diachi,
           'dien_thoai' => $dienthoai,
           'email' => $email,
           'ten_mien' => $tenmien,
           'gioi_thieu' => $ghichu,
           'logo' => $logo,
           'facebook' => $facebook,
           'twitter' => $twitter,
           'instagram' => $instagram,
           'youtube' => $youtube,
           'time1' => $time1,
           'time2' => $time2,
           'ngay_sinh' => $ngaysinh,
           'chuc_danh' => $chucdanh
       );
       if ($this->model->updateObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->render('thongtin/thongbao');
       require 'layouts/footer.php';
   }

}
?> 
