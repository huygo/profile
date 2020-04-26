<?php
class media extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        require 'layouts/header.php';
        $page                = isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 1;
        $rows                = isset($_mediaT['rows']) ? intval($_mediaT['rows']) : 1000;
        $sort                = isset($_mediaT['sort']) ? strval($_mediaT['sort']) : 'id';
        $order               = isset($_mediaT['order']) ? strval($_mediaT['order']) : 'DESC';
        $offset              = ($page - 1) * $rows;
        $tukhoa              = isset($_REQUEST['tukhoa']) ? $_REQUEST['tukhoa'] : '';
        $this->view->data    = $this->model->getFetObj($sort, $order, $offset, $rows, $tukhoa);
        //$this->view->sotrang = $this->model->sotrang($rows, $tukhoa);
        $_SESSION['page']    = $page;
        $this->view->render('media/index');
        require 'layouts/footer.php';
    }

    function battat()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->battat($id);
          header('Location: ' . CMS . '/media');
    }

    function xoa()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->delObj($id);
        header('Location: ' . CMS . '/media');
    }

    function add()
    {
        require 'layouts/header.php';
        $this->view->render('media/add');
        require 'layouts/footer.php';
    }

    function addsave()
    {
      $name    = $_REQUEST['name'];
      $loai    = $_REQUEST['loai'];
      $url    = $_REQUEST['url'];
      $folder    = $_REQUEST['folder'];
      if (isset($_FILES['file']['name']) && ($_FILES['file']['name'] != '')) {
           $dir   = ROOT_DIR . '/uploads/'.$folder.'/';
           $fname = functions::convertname($name);
           $file  = functions::uploadfile('file', $dir, $fname);
           $hinhanh  = HOME . '/uploads/'.$folder.'/' . $file;
      } else
           $hinhanh  = '';
      $data = array(
        'name' => $name,
        'phan_loai' => $loai,
        'ngay_dang' => date("Y-m-d"),
        'hinh_anh' => $hinhanh,
        'folder' => $folder,
        'url' => $url,
        'tinh_trang' => 1
      );
      if ($this->model->addObj($data))
            $this->view->thongbao = 'Cập nhật thành công';
      else
            $this->view->thongbao = 'Cập nhật không thành công';
      require 'layouts/header.php';
      $this->view->module = 'media';
      $this->view->render('index/thongbao');
      require 'layouts/footer.php';
    }
}
?>
