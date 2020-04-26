<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Banner quảng cáo và slide</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="banner/add" class="btn btn-default">Thêm banner</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên banner</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
														<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$banner=$this->data;
												if (sizeof($banner)>0) {
														// 	$ketqua=functions::dequy($banner,0,0);
														$i=1;
														// 	foreach ($ketqua as $item) {
														foreach ($banner as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$item['mo_ta'].'</td>
				                            <td><img src="'.$item['hinh_anh'].'" height="60px" /></td>
																		<td align="center"><a href="banner/battat?id='.$item['id'].'"';
																if ($item['tinh_trang']==1)
																	echo 'class="btn cur-p btn-primary">Bật</a>';
																else
																	echo 'class="btn cur-p btn-danger">Tắt</a>';
																echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																echo ' <a href="banner/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
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
			window.location.href = 'banner/xoa?id='+id;
}
	function timkiem() {
		var tukhoa=document.getElementById("tukhoa").value;
		window.location.href = 'banner?tukhoa='+tukhoa;
	}
</script>
