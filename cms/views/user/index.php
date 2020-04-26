<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Quản lý users</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="user/add" class="btn btn-default">Thêm mới</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nhân viên</th>
                            <th>Tên đăng nhập</th>
                            <th>Số điện thoại</th>
														<th>Hình ảnh</th>
														<th></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$i=1;
												foreach ($this->data as $item) {
														echo '<tr>
		                            <th scope="row">'.$i.'</th>
		                            <td>'.$item['name'].'</td>
		                            <td>'.$item['email'].'</td>
                                <td>'.$item['dien_thoai'].'</td>
                                <td><img src="'.$item['hinh_anh'].'" height="60px" /></td>
                                <td><button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>
																<a href="user/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Sửa</a></td></tr>
                                </td></tr> ';
														$i++;
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
			window.location.href = 'media/xoa?id='+id;
}
</script>
