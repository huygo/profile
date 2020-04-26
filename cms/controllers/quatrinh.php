<?php
class quatrinh extends controller
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
       $this->view->render('quatrinh/index');
       require 'layouts/footer.php';
   }


   function xoa()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->delObj($id);
       header('Location: ' . CMS . '/quatrinh');
   }

   function edit()
   {
       require 'layouts/header.php';
       $id                  = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data    = $this->model->getrow($id);
       $this->view->render('quatrinh/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id   = $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $mota = $_REQUEST['mota'];
       $thoigian = $_REQUEST['tg'];
       $loai  = $_REQUEST['loai'];
       $data = array(
                   'thoi_gian' => $thoigian,
                   'name' => $name,
                   'mo_ta' => $mota,
                   'loai' => $loai,
        );
       if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
       else
            $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'quatrinh';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }

   function add()
   {
       require 'layouts/header.php';
       $this->view->render('quatrinh/add');
       require 'layouts/footer.php';
   }

   function addsave()
   {
       $name = $_REQUEST['name'];
       $mota = $_REQUEST['mota'];
       $thoigian = $_REQUEST['tg'];
       $loai  = $_REQUEST['loai'];
       $data = array(
                  'id' =>null,
                  'thoi_gian' => $thoigian,
                   'name' => $name,
                   'mo_ta' => $mota,
                   'loai' => $loai,
        );
       if ($this->model->addObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
        $this->view->module = 'quatrinh';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }
}
?>
