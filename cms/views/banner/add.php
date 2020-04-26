<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Thêm mới banner/slide
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="banner/addsave" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên banner</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Tên banner" id="name" name="name">
													</div>
											</div>
                      <div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Mô tả</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Mô tả" id="mota" name="mota" >
													</div>
											</div>
										  <div class="form-group">
												<label for="com" class="col-sm-2 control-label">Vị trí xuất hiện</label>
												<div class="col-sm-8"><select name="com" id="com" class="form-control1">
													<option value="1" >Banner trang chủ</option>
                          <option value="2" >Slide trang chủ</option>
												</select></div>
											</div>
                      <div class="form-group">
                          <label for="update" class="col-sm-2 control-label">Thứ tự</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control1" placeholder="Ngày cập nhật" id="thutu" name="thutu">
                          </div>
                      </div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">Link liên kết</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Link liên kết">
													</div>
											</div>
                      <div class="form-group">
                          <label for="anh" class="col-sm-2 control-label">Hình ảnh</label>
                          <div class="col-sm-8">
                               <img src="http://via.placeholder.com/360x225" height="60px">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="hinhanh" class="col-sm-2 control-label">Link ảnh</label>
                          <div class="col-sm-8">
                              <input  type="text" class="form-control1" id="hinhanh" name="hinhanh" placeholder="Copy/paste link ảnh vào đây">
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
