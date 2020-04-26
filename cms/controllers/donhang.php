<?php
class donhang extends controller
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
       $this->view->render('donhang/index');
       require 'layouts/footer.php';
   }

   function chitiet()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $data = $this->model->chitiet($id);
       echo $data;
   }

   function edit()
   {
       require 'layouts/header.php';
       $id                  = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data    = $this->model->getrow($id);
       $this->view->render('donhang/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id   = $_REQUEST['id'];
       $diachi = $_REQUEST['diachi'];
       $tinhtrang = $_REQUEST['tinhtrang'];
       $data = array(
              'dia_chi' => $diachi,
              'tinh_trang' => $tinhtrang
       );
       if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
       else
            $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'donhang';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }
}
?>
