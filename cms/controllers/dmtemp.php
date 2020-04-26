<?php
class dmtemp extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require 'layouts/header.php';
       $tukhoa           = isset($_REQUEST['tukhoa']) ? $_REQUEST['tukhoa'] : '';
       $this->view->data = $this->model->getFetObj($tukhoa);
       $this->view->render('dmtemp/index');
       require 'layouts/footer.php';
   }

   function edit()
   {
       require 'layouts/header.php';
       $id               = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data = $this->model->getrow($id);
       $danhmuc = $this->model->getdanhmuc($id);
   		 $this->view->menu = functions::dequy($danhmuc,0,0);
       $this->view->render('dmtemp/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id   = $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $url = $_REQUEST['url'];
       $mota = $_REQUEST['mota'];
       $cha = $_REQUEST['cha'];
       $hinhanh = $_REQUEST['hinhanh'];
       $vitri = $_REQUEST['vitri'];
       $thutu = $_REQUEST['thutu'];
       $data = array(
           'name' => $name,
           'url' => $url,
           'mo_ta' => $mota,
           'cha' => $cha,
           'hinh_anh' => $hinhanh,
           'com' => $vitri,
           'thu_tu' => $thutu
       );
       if ($this->model->updateObj($id, $data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'dmtemp';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }

   function add()
   {
       require 'layouts/header.php';
       $danhmuc = $this->model->getdanhmuc(0);
       $this->view->menu = functions::dequy($danhmuc,0,0);
       $this->view->render('dmtemp/add');
       require 'layouts/footer.php';
   }

   function addsave()
   {
     $name = $_REQUEST['name'];
     $url     = functions::convertname($name);
     $mota = $_REQUEST['mota'];
     $cha = $_REQUEST['cha'];
     $hinhanh = $_REQUEST['hinhanh'];
     $vitri = $_REQUEST['vitri'];
     $thutu = $_REQUEST['thutu'];
     $data = array(
         'name' => $name,
         'url' => $url,
         'mo_ta' => $mota,
         'cha' => $cha,
         'hinh_anh' => $hinhanh,
         'com' => $vitri,
         'thu_tu' => $thutu,
         'tinh_trang'=> 1
     );
       if ($this->model->addObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'dmtemp';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }


   function xoa()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->delObj($id);
       header('Location: ' . CMS . '/dmtemp');
   }

   function battat()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->battat($id);
       header('Location: ' . CMS . '/dmtemp');
   }
}
?>
