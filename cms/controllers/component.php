<?php
class component extends controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        require 'layouts/header.php';
        $this->view->data = $this->model->getFetObj();
        $this->view->render('component/index');
        require 'layouts/footer.php';
    }
    
	function edit(){
		require 'layouts/header.php';
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$this->view->data = $this->model->getrow($id);
		$this->view->render('component/edit');
       	require 'layouts/footer.php';
	}

    function editsave(){
		$id=$_REQUEST['id'];
        $name = $_REQUEST['name'];
        $loai = $_REQUEST['loai'];
		$data = array('name' => $name, 'loai' => $loai);
        if($this->model->updateObj($id, $data))
           	$this->view->thongbao = 'Cập nhật thành công'; 
        else
          	$this->view->thongbao = 'Cập nhật không thành công'; 
        require 'layouts/header.php';
        $this->view->render('component/thongbao');
        require 'layouts/footer.php'; 			
    }

    function add(){
		require 'layouts/header.php';
		$this->view->render('component/add');
       	require 'layouts/footer.php';
    }

    function addsave(){
        $name = $_REQUEST['name'];
        $loai = $_REQUEST['loai'];
		$data = array('name' => $name, 'loai' => $loai, 'tinh_trang'=>1);
        if($this->model->addObj($data))
           	$this->view->thongbao = 'Cập nhật thành công'; 
        else
          	$this->view->thongbao = 'Cập nhật không thành công'; 
        require 'layouts/header.php';
        $this->view->render('component/thongbao');
        require 'layouts/footer.php'; 			
    }
    
    
    function del(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
        $this->model->delObj($id);
		header('Location: '.CMS.'/component');
	}
}
?>