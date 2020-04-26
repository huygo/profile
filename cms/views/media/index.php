<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Quản lý media</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <!-- <h4>Hover Rows Table:</h4> -->
								<a href="media/add" class="btn btn-default">Upload media</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Media</th>
                            <th>Loại</th>
                            <th>Link</th>
														<th>Hình ảnh</th>
														<th></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$danhmuc=$this->data;
												if (sizeof($danhmuc)>0) {
														$i=1;
														foreach ($danhmuc as $item) {
                                if ($item['phan_loai']==1)
                                    $loai='Hình ảnh';
                                elseif ($item['phan_loai']==2)
                                    $loai='Video';
                                elseif ($item['phan_loai']==3)
                                    $loai='Audio';
                                else
                                    $loai = 'Khác';
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$loai.'</td>
                                    <td>'.$item['hinh_anh'].'</td>
                                    <td><img src="'.$item['hinh_anh'].'" height="60px" /></td>
                                    <td><button class="btn cur-p btn-primary" onclick="xoa('.$item['id'].')" style="background-color:red">Xóa</button>
                                    </td></tr> ';
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
			window.location.href = 'media/xoa?id='+id;
}
</script>
