<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Thông tin khách hàng đăng kí</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email khách hàng</th>
                            <th>Nội dung</th>
                            <th width="600">Tin nhắn</th>
                            <th>Ngày đăng kí</th>
							<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$dangki=$this->data;
												if (sizeof($dangki)>0) {
														$i=1;
														foreach ($dangki as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$item['email'].'</td>
				                            <td>'.$item['noi_dung'].'</td>
				                            <td>'.$item['tin_nhan'].'</td>
				                            <td>'.date("d-m-Y", strtotime($item['thoi_gian'])).'</td>
																		<td align="center">';
																echo ' <button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>';
																echo '</td></tr> ';
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
			window.location.href = 'dangki/xoa?id='+id;
}
	function timkiem() {
		var tukhoa=document.getElementById("tukhoa").value;
		window.location.href = 'dangki?tukhoa='+tukhoa;
	}
</script>
