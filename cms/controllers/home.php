<?php
class home extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        require 'layouts/header.php';
        $this->view->data = $this->model->getFetObj();
        $this->view->render('home/index');
        require 'layouts/footer.php';
    }

    function down(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$this->model->downObj($id);
		header('Location: '.CMS.'/home');
    }

    function up(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$this->model->upObj($id);
		header('Location: '.CMS.'/home');
    }
    
    
    function del(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
        $this->model->delObj($id);
		header('Location: '.CMS.'/home');
	}

	function edit(){
		require 'layouts/header.php';
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$title=isset($_REQUEST['title'])?$_REQUEST['title']:'';
		$this->view->data = $this->model->getCom($id);
		$this->view->com = $id;
		$this->view->title = $title;
		$this->view->render('home/edit');
       	require 'layouts/footer.php';
	}	

    function delhome(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$com=isset($_REQUEST['com'])?$_REQUEST['com']:0;
        $this->model->delHome($id);
		header('Location: '.CMS.'/home/edit?id='.$com);
	}

	function edithome(){
		require 'layouts/header.php';
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$this->view->data = $this->model->getHome($id);
		$this->view->render('home/edithome');
       	require 'layouts/footer.php';
	}	

	function edithomesave(){
		$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
		$this->view->com=isset($_REQUEST['com'])?$_REQUEST['com']:0;
        $name = $_REQUEST['name'];
        $mota = $_REQUEST['mota'];
        $option1 = $_REQUEST['opt1'];
		$option2 = $_REQUEST['opt2'];
		$link = $_REQUEST['link'];
		$video = $_REQUEST['video'];
		if ($_REQUEST['logo']=='') {  
			if (isset($_FILES['hinh_anh']['name']) && ($_FILES['hinh_anh']['name']!='')) {  
				$dir = ROOT_DIR.'/uploads/component/';
				$fname=functions::convertname($name);
				$file=functions::uploadfile('hinh_anh',$dir,$fname);
				$logo =HOME.'/uploads/component/'.$file;
			}
			else
				$logo = 'http://via.placeholder.com/360x225';
		}
		else
			$logo = $_REQUEST['logo'];
		$data = array('name' => $name, 'mo_ta' => $mota, 'link' => $link,  'video'=>$video,
			'hinh_anh'=>$logo, 'option_1'=>$option1, 'option_2'=>$option2);
        if($this->model->updateObj($id, $data))
           	$this->view->thongbao = 'Cập nhật thành công'; 
        else
          	$this->view->thongbao = 'Cập nhật không thành công'; 
        require 'layouts/header.php';
        $this->view->render('home/thongbao');
        require 'layouts/footer.php'; 				
	}	

	function addhome(){
		require 'layouts/header.php';
		$this->view->com=isset($_REQUEST['com'])?$_REQUEST['com']:0;
		$this->view->render('home/add');
       	require 'layouts/footer.php';
	}	

	function addhomesave(){
		$this->view->com=isset($_REQUEST['com'])?$_REQUEST['com']:0;
        $name = $_REQUEST['name'];
        $mota = $_REQUEST['mota'];
        $option1 = $_REQUEST['opt1'];
		$option2 = $_REQUEST['opt2'];
		$link = $_REQUEST['link'];
		$video = $_REQUEST['video'];
		if ($_REQUEST['logo']=='') {  
			if (isset($_FILES['hinh_anh']['name']) && ($_FILES['hinh_anh']['name']!='')) {  
				$dir = ROOT_DIR.'/uploads/component/';
				$fname=functions::convertname($name);
				$file=functions::uploadfile('hinh_anh',$dir,$fname);
				$logo =HOME.'/uploads/component/'.$file;
			}
			else
				$logo = 'http://via.placeholder.com/360x225';
		}
		else
			$logo = $_REQUEST['logo'];
		$data = array('name' => $name, 'mo_ta' => $mota, 'link' => $link,  'video'=>$video, 'com_id'=>$this->view->com,
			'hinh_anh'=>$logo, 'option_1'=>$option1, 'option_2'=>$option2, 'tinh_trang'=>1);
        if($this->model->insertObj($data))
           	$this->view->thongbao = 'Cập nhật thành công'; 
        else
          	$this->view->thongbao = 'Cập nhật không thành công'; 
        require 'layouts/header.php';
        $this->view->render('home/thongbao');
        require 'layouts/footer.php'; 				
	}	

	
}
?>