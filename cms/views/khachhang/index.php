<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Nhận xét của khách hàng</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="khachhang/add" class="btn btn-default">Thêm nhận xét</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Loại</th>
                            <th width="600">Nội dung</th>
							<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$khachhang=$this->data;
												if (sizeof($khachhang)>0) {
														$i=1;
														foreach ($khachhang as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['name'].'</td>';
				                            if ($item['loai']==0) {
				                            	echo '<td>Nhận xét</td>';
				                            }else{
				                            	echo '<td>Ưu đãi</td>';
				                            }
				                            echo '<td>'.$item['nhan_xet'].'</td>
																		<td align="center">';
																echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																echo ' <a href="khachhang/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr> ';
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
			window.location.href = 'khachhang/xoa?id='+id;
}
	function timkiem() {
		var tukhoa=document.getElementById("tukhoa").value;
		window.location.href = 'khachhang?tukhoa='+tukhoa;
	}
</script>
