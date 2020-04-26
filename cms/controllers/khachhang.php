<?php
class khachhang extends controller
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
       $this->view->render('khachhang/index');
       require 'layouts/footer.php';
   }


   function xoa()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->delObj($id);
       header('Location: ' . CMS . '/khachhang');
   }

   function edit()
   {
       require 'layouts/header.php';
       $id                  = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data    = $this->model->getrow($id);
       $this->view->render('khachhang/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id   = $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $loai= $_REQUEST['loai'];
       $nhanxet = $_REQUEST['nhanxet'];
       $data = array(
                   'name' => $name,
                   'loai' =>$loai,
                   'nhan_xet' => $nhanxet
        );
       if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
       else
            $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'khachhang';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }

   function add()
   {
       require 'layouts/header.php';
       $this->view->render('khachhang/add');
       require 'layouts/footer.php';
   }

   function addsave()
   {
       $name = $_REQUEST['name'];
       $loai= $_REQUEST['loai'];
       $nhanxet = $_REQUEST['nhanxet'];
       $data = array(
                   'name' => $name,
                   'loai' =>$loai,
                   'nhan_xet' => $nhanxet
        );
       if ($this->model->addObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
        $this->view->module = 'khachhang';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }
}
?>
