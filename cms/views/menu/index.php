<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Quản lý menu</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
								<a href="menu/add" class="btn btn-default">Thêm menu</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên menu</th>
                            <th>Loại</th>
                            <th>Link</th>
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
																	echo '
																	<tr>
																	<th scope="row">'.$i.'</th>
																	<td><a href="menu/edit?id='.$item['id'].'">';
																	$prefix='';
																	for ($j=0;$j<$item['level'];$j++)
																		$prefix.='--';
																	echo $prefix.$item['name'].'</a></td>
																	<td>'.$item['loai'].'</td>
																	<td>'.$item['url'].'</td>
																	<td align="center"><a href="menu/battat?id='.$item['id'].'"';
																	if ($item['tinh_trang']==1)
																		echo 'class="btn cur-p btn-primary">Bật</a>';
																	else
																		echo 'class="btn cur-p btn-danger">Tắt</a>';
																	echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																	echo ' <a href="menu/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
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
			window.location.href = 'menu/del?id='+id;
}
</script>
