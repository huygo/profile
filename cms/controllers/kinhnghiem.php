<?php
class kinhnghiem extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require 'layouts/header.php';
       $this->view->data = $this->model->info();
       $this->view->render('kinhnghiem/index');
       require 'layouts/footer.php';
   }

   function editsave()
   {
        $kn1      = $_REQUEST['kn1'];
        $rate1      = $_REQUEST['rate1'];
        $kn2      = $_REQUEST['kn2'];
        $rate2      = $_REQUEST['rate2'];
        $kn3      = $_REQUEST['kn3'];
        $rate3      = $_REQUEST['rate3'];
        $kn4      = $_REQUEST['kn4'];
        $rate4      = $_REQUEST['rate4'];
        $kn5      = $_REQUEST['kn5'];
        $rate5      = $_REQUEST['rate5'];
        $doanhthu  = $_REQUEST['doanhthu'];
        $duan      = $_REQUEST['duan'];
        $khachhang = $_REQUEST['khachhang'];
       $data                         = array(
           'ex_1' => $kn1,
           'rate_1' => $rate1,
           'ex_2' => $kn2,
           'rate_2' => $rate2,
           'ex_3' => $kn3,
           'rate_3' => $rate3,
           'ex_4' => $kn4,
           'rate_4' => $rate4,
           'ex_5' => $kn5,
           'rate_5' => $rate5,
           'doanh_thu' => $doanhthu,
           'du_an' => $duan,
           'khach_hang' => $khachhang
       );
       if ($this->model->updateObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->render('kinhnghiem/thongbao');
       require 'layouts/footer.php';
   }

}
?> 
