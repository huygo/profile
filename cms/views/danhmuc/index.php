<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Danh mục bài viết</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="danhmuc/add" class="btn btn-default">Thêm danh mục</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
														<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$danhmuc=$this->data;
												if (sizeof($danhmuc)>0) {
														$ketqua=functions::dequy($danhmuc,0,0);
														$i=1;
														foreach ($ketqua as $item) {
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>';
                                    $prefix='';
                                    for ($j=0;$j<$item['level'];$j++)
                                      $prefix.='---';
                                echo '
                                    <td>'.$prefix.$item['name'].'</td>
                                    <td>'.$item['mo_ta'].'</td>
				                            <td><img src="'.$item['hinh_anh'].'" height="60px" /></td>
																		<td align="center"><a href="danhmuc/battat?id='.$item['id'].'"';
																if ($item['tinh_trang']==1)
																	echo 'class="btn cur-p btn-primary">Bật</a>';
																else
																	echo 'class="btn cur-p btn-danger">Tắt</a>';
																echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																echo ' <a href="danhmuc/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
																$i++;
														}
												}
										?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function xoa(id) {
	if (confirm("Bạn có chắc chắn muốn xóa?"))
			window.location.href = 'danhmuc/xoa?id='+id;
}
	function timkiem() {
		var tukhoa=document.getElementById("tukhoa").value;
		window.location.href = 'danhmuc?tukhoa='+tukhoa;
	}
</script>
