<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin banner/slide
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="banner/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên banner</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Tên banner" id="name" name="name"
                                value="<?php echo $this->data['name'] ?>" >
													</div>
											</div>
                      <div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Mô tả</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Mô tả" id="mota" name="mota"
                                value="<?php echo $this->data['mo_ta'] ?>" >
													</div>
											</div>
										  <div class="form-group">
												<label for="com" class="col-sm-2 control-label">Vị trí xuất hiện</label>
												<div class="col-sm-8"><select name="com" id="com" class="form-control1">
													<option value="1" <?php if ($this->data['com']==1) echo 'selected="selected"'; ?>>Banner trang chủ</option>
                          <option value="2" <?php if ($this->data['com']==2) echo 'selected="selected"'; ?>>Slide trang chủ</option>
												</select></div>
											</div>
                      <div class="form-group">
                          <label for="update" class="col-sm-2 control-label">Thứ tự</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control1" placeholder="Ngày cập nhật" id="thutu" name="thutu"
                              value="<?php echo $this->data['thu_tu'] ?>">
                          </div>
                      </div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">Link liên kết</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url" placeholder="Link liên kết"
															value="<?php echo $this->data['url']; ?>" >
													</div>
											</div>
                      <div class="form-group">
                          <label for="anh" class="col-sm-2 control-label">Hình ảnh</label>
                          <div class="col-sm-8">
                               <img src="<?php echo $this->data['hinh_anh']; ?>" height="60px">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="hinhanh" class="col-sm-2 control-label">Link ảnh</label>
                          <div class="col-sm-8">
                              <input  type="text" class="form-control1" id="hinhanh" name="hinhanh" placeholder="Link ảnh"
                              value="<?php echo $this->data['hinh_anh'] ?>" >
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
