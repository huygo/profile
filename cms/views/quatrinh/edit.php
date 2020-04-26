<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin quá trình 
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="quatrinh/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Thời gian công tác</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Thời gian công tác" id="tg" name="tg"
                                value="<?php echo $this->data['thoi_gian'] ?>" >
													</div>
											</div>
                      <div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Tên cơ quan</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Cơ quan" id="name" name="name"
                                value="<?php echo $this->data['name'] ?>" >
													</div>
											</div>
										  <div class="form-group">
												<label for="com" class="col-sm-2 control-label">Loại</label>
												<div class="col-sm-8"><select name="loai" id="loai" class="form-control1">
													<option value="0" <?php if ($this->data['loai']==0) echo 'selected="selected"'; ?>>My Experiences</option>
                          <option value="1" <?php if ($this->data['loai']==1) echo 'selected="selected"'; ?>>My Education</option>
												</select></div>
											</div>
                      <div class="form-group">
                          <label for="update" class="col-sm-2 control-label">Mô tả</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control1" placeholder="Mô tả" id="mota" name="mota"
                              value="<?php echo $this->data['mo_ta'] ?>">
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
