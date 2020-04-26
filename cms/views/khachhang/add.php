<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Thêm mới nhận xét 
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="khachhang/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Tên khách hàng" id="name" name="name" required>
													</div>
											</div>
                      <div class="form-group">
                          <label for="name" class="col-sm-2 control-label">Loại</label>
                          <div class="col-sm-8">
                              <select class="form-control1" name="loai">
                                <option value="0">Nhận xét</option>
                                <option value="1">Ưu đãi</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Nội dung</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Nhận xét" id="nhanxet" name="nhanxet" requiredrequired>
													</div>
											</div>
                    	<div class="form-group">
													<label for="capnhat" class="col-sm-2 control-label"></label>
													<div class="col-sm-8">
													<input type="submit" value="Cập nhật" id="capnhat" name="capnhat">
												  </div>
											</div>

									</form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
