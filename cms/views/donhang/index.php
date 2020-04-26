<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Danh sách đơn hàng</h3>
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ngày đặt hàng</th>
                            <th>Khách hàng</th>
                            <th>Email</th>
                            <th>Tình trạng</th>
														<th width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
										<?php
												$donhang=$this->data;
												if (sizeof($donhang)>0) {
														$i=1;
														foreach ($donhang as $item) {
																echo '<tr>
				                            <th scope="row">'.$i.'</th>
				                            <td>'.date("d/m/Y",strtotime($item['ngay_gio'])).'</td>
				                            <td>'.$item['name'].'</td>
				                            <td>'.$item['email'].'</td>
                                    <td>'.$item['tinhtrang'].'</td>
                                    <td>
                                    <div class="dropdown head-dpdn">
                                        <button onclick="loaddata('.$item['id'].')" class="dropdown-toggle btn cur-p btn-primary" data-toggle="dropdown" aria-expanded="false">Chi tiết</button>
                                        <ul class="dropdown-menu" style="width:600px; heigh=60px; left:-400px;">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Chi tiết đơn hàng</h3>
                                                </div>
                                            </li>
                                            <li>
                                              <table class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>Tên hàng</th>
                                                          <th>Số lượng</th>
                                                          <th style="text-align:right">Đơn giá</th>
                                                          <th style="text-align:right">Thành tiền</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="tbody'.$item['id'].'">
                                                  </tbody>
                                              </table>
                                            </li>
                                        </ul>
                                        <a href="donhang/edit?id='.$item['id'].'" class="btn cur-p btn-primary">Update</a>
                                    </div>
                                    </td>
                                </tr> ';
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
    			window.location.href = 'donhang/xoa?id='+id;
    }
	  function timkiem() {
		    var tukhoa=document.getElementById("tukhoa").value;
		      window.location.href = 'donhang?tukhoa='+tukhoa;
	  }
    function loaddata(id) {
        // var inner='<tr><td></td><td></td><td></td><td>xx</td></tr>';
        $.post("donhang/chitiet", {id: id}, function(result){
            var data = JSON.parse(result);
            //alert(result);
            var inner='';
            var thanhtien=0
            var tong=0;
            data.forEach(function (item, index) {
                thanhtien = item.so_luong*item.don_gia;
                inner+='<tr><td>'+item.ten_hang+'</td><td>'+item.so_luong+'</td><td align="right">'+item.don_gia+'</td><td align="right">'+thanhtien.toFixed(2)+'</td></tr>';
                tong=tong+thanhtien;
            })
            inner+='<tr><td colspan=3>Tổng tiền<td align="right">'+tong.toFixed(2)+'</td></tr>';
            document.getElementById('tbody'+id).innerHTML=inner;
        });
        // document.getElementById('tbody').innerHTML=inner;
	  }


</script>
