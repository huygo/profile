<?php 
  $total_records = $this->data['total'];
  $current_page = isset($_GET['p']) ? $_GET['p'] : 1;
  $limit = 20;
  $total_page = ceil($total_records / $limit);
  if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
  $x = isset($_GET['danhmuc'])?'&danhmuc='.$_GET['danhmuc']:'';
 ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Danh sách các bài viết</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
								<a href="baiviet/add" class="btn btn-default">Thêm bài viết</a>
                <?php $selection=isset($_GET['danhmuc'])?$_GET['danhmuc']:0; ?>
                <select name="danhmuc" id="danhmuc" class="btn btn-default" onchange="timkiem()">
                  <option value="0">Lọc theo danh mục</option>
                  <?php

                        foreach ($this->danhmuc as $opt) {
                          echo '<option value="'.$opt['id'].'" ';
                          if ($selection==$opt['id']) echo 'selected="selected"';
                          echo '>';
                          if ($opt['level']==1) echo '---';
                          elseif ($opt['level']==2) echo '------';
                          echo $opt['name'].'</option>';
                        }
                  ?>
                </select>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên bài viết</th>
                            <th>Danh mục</th>
                            <th>Hình ảnh</th>
                            <th>Home</th>
														<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$baiviet=$this->data['rows'];
												if (sizeof($baiviet)>0) {
														$i=1;
														foreach ($baiviet as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$item['danhmuc'].'</td>
				                            <td><img src="'.$item['hinh_anh'].'" height="60px" /></td>
                                    <td>'.$item['com'].'</td>
																		<td align="center"><a href="baiviet/battat?id='.$item['id'].'"';
																if ($item['tinh_trang']==1)
																	echo 'class="btn cur-p btn-primary">Bật</a>';
																else
																	echo 'class="btn cur-p btn-danger">Tắt</a>';
                                  echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
  																echo ' <a href="baiviet/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
																$i++;
														}
												}
										?>
                    </tbody>
                </table>
                <center>
                  <div class="pagination">
                   <?php 
                   if ($current_page > 1 && $total_page > 1){
                    echo '<a href="baiviet?p='.($current_page-1).''.$x.'">Prev</a> | ';
                  }
                  for ($i = 1; $i <= $total_page; $i++){
                    if ($i == $current_page){
                      echo '<span>'.$i.'</span> | ';
                    }
                    else{
                      echo '<a href="baiviet?p='.$i.''.$x.'">'.$i.'</a> | ';
                    }
                  }
                  if ($current_page < $total_page && $total_page > 1){
                    echo '<a href="baiviet?p='.($current_page+1).''.$x.'">Next</a> | ';
                  }
                  ?>
                  </div>
                  </center>
            </div>
        </div>
    </div>
</div>
<script>
function xoa(id) {
	if (confirm("Bạn có chắc chắn muốn xóa?"))
			window.location.href = 'baiviet/xoa?id='+id;
}
function timkiem() {
	   var danhmuc=document.getElementById("danhmuc").value;
	   window.location.href = 'baiviet?danhmuc='+danhmuc;
}
</script>
