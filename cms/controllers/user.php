<?php
class user extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require 'layouts/header.php';
       $page                = isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 1;
       $rows                = isset($_POST['rows']) ? intval($_POST['rows']) : 20;
       $sort                = isset($_POST['sort']) ? strval($_POST['sort']) : 'id';
       $order               = isset($_POST['order']) ? strval($_POST['order']) : 'DESC';
       $offset              = ($page - 1) * $rows;
       $tukhoa              = isset($_REQUEST['tukhoa']) ? $_REQUEST['tukhoa'] : '';
       $this->view->data    = $this->model->getFetObj($sort, $order, $offset, $rows, $tukhoa);
       $this->view->sotrang = $this->model->sotrang($rows, $tukhoa);
       $_SESSION['page']    = $page;
       $this->view->render('user/index');
       require 'layouts/footer.php';
   }

   function edit()
   {
       require 'layouts/header.php';
       $id               = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->view->data = $this->model->getrow($id);
       $this->view->render('user/edit');
       require 'layouts/footer.php';
   }

   function editsave()
   {
       $id        = $_REQUEST['id'];
       $name      = $_REQUEST['name'];
       $email     = $_REQUEST['email'];
       $dienthoai = $_REQUEST['dienthoai'];
       $quote      = $_REQUEST['quote'];
       $hinhanh      = (isset($_REQUEST['hinhanh']) AND ($_REQUEST['hinhanh']!=''))?$_REQUEST['hinhanh']:'https://thuonghieuweb.com/media/anonym.png';
       if (isset($_REQUEST['matkhau']) && ($_REQUEST['matkhau'] !== ''))
           $data = array(
               'name' => $name,
               'password' => md5(md5($_REQUEST['matkhau'])),
               'email' => $email,
               'dien_thoai' => $dienthoai,
               'quote' => $quote,
               'hinh_anh' => $hinhanh
           );
       else
           $data = array(
               'name' => $name,
               'email' => $email,
               'dien_thoai' => $dienthoai,
               'quote' => $quote,
               'hinh_anh' => $hinhanh
           );
       if ($this->model->updateObj($id, $data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'user';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }

   function add()
   {
       require 'layouts/header.php';
       $this->view->render('user/add');
       require 'layouts/footer.php';
   }

   function addsave()
   {
     $name      = $_REQUEST['name'];
     $email     = $_REQUEST['email'];
     $dienthoai = $_REQUEST['dienthoai'];
     $quote      = $_REQUEST['quote'];
     $hinhanh      = (isset($_REQUEST['hinhanh']) AND ($_REQUEST['hinhanh']!=''))?$_REQUEST['hinhanh']:'https://thuonghieuweb.com/media/anonym.png';
     if (isset($_REQUEST['matkhau']) && ($_REQUEST['matkhau'] !== ''))
         $data = array(
             'name' => $name,
             'password' => md5(md5($_REQUEST['matkhau'])),
             'email' => $email,
             'dien_thoai' => $dienthoai,
             'quote' => $quote,
             'hinh_anh' => $hinhanh,
             'tinh_trang' => 1
         );
     else
         $data = array(
             'name' => $name,
             'password' => md5(md5('vdata123')),
             'email' => $email,
             'dien_thoai' => $dienthoai,
             'quote' => $quote,
             'hinh_anh' => $hinhanh,
             'tinh_trang' => 1
         );
       if ($this->model->addObj($data))
           $this->view->thongbao = 'Cập nhật thành công';
       else
           $this->view->thongbao = 'Cập nhật không thành công';
       require 'layouts/header.php';
       $this->view->module = 'user';
       $this->view->render('index/thongbao');
       require 'layouts/footer.php';
   }


   function del()
   {
       $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
       $this->model->delObj($id);
       header('Location: ' . CMS . '/user');
   }
}
?>
