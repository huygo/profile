<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Quá trình phát triển bản thân</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="quatrinh/add" class="btn btn-default">Thêm quá trình</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Thời gian công tác</th>
                            <th>Tên cơ quan, tổ chức</th>
                            <th>Mô tả</th>
                            <th>Loại</th>
							<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$quatrinh=$this->data;
												if (sizeof($quatrinh)>0) {
														// 	$ketqua=functions::dequy($banner,0,0);
														$i=1;
														// 	foreach ($ketqua as $item) {
														foreach ($quatrinh as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['thoi_gian'].'</td>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$item['mo_ta'].'</td>';
				                            if ($item['loai']==0) {
				                            	echo ' <td>My Experiences</td>';
				                            }else{
				                            	echo ' <td>My Education</td>';
				                            }
																		echo '<td align="center">';
																echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																echo ' <a href="quatrinh/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
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
			window.location.href = 'quatrinh/xoa?id='+id;
}
	function timkiem() {
		var tukhoa=document.getElementById("tukhoa").value;
		window.location.href = 'quatrinh?tukhoa='+tukhoa;
	}
</script>
