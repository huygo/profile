<?php
class banner extends controller
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
       $this->view->render('banner/index');
       require 'layouts/footer.php';
   }

   function battat()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->battat($id);
       header('Location: ' . CMS . '/banner');
   }

   function xoa()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->delObj($id);
       header('Location: ' . CMS . '/banner');
   }

   function edit()
   {
       require 'layouts/header.php';
       $id                  = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data    = $this->model->getrow($id);
       $this->view->render('banner/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id   = $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $mota = $_REQUEST['mota'];
       $hinhanh = $_REQUEST['hinhanh'];
       $thutu  = $_REQUEST['thutu'];
       $com  = $_REQUEST['com'];
       $url = $_REQUEST['url'];
       $data = array(
                   'name' => $name,
                   'url' => $url,
                   'mo_ta' => $mota,
                   'com' => $com,
                   'thu_tu' => $thutu,
                   'hinh_anh' => $hinhanh
        );
       if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
       else
            $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'banner';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }

   function add()
   {
       require 'layouts/header.php';
       $this->view->render('banner/add');
       require 'layouts/footer.php';
   }

   function addsave()
   {
       $name = $_REQUEST['name'];
       $mota = $_REQUEST['mota'];
       $hinhanh = $_REQUEST['hinhanh'];
       $thutu  = $_REQUEST['thutu'];
       $com  = $_REQUEST['com'];
       $url = $_REQUEST['url'];
       $data = array(
                   'name' => $name,
                   'url' => $url,
                   'mo_ta' => $mota,
                   'com' => $com,
                   'thu_tu' => $thutu,
                   'hinh_anh' => $hinhanh
        );
       if ($this->model->addObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
        $this->view->module = 'banner';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }
}
?>
