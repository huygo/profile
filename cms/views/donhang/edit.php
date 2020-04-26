<div id="page-wrapper">
    <div class="main-page">
        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            <div class="panel-primary">
                <div class="panel-heading">
                    Cập nhật thông tin đơn hàng
                </div>
                <div class="panel-body">
									<form class="form-horizontal" action="donhang/editsave?id=<?php echo $this->data['id'] ?>" method="post" enctype="multipart/form-data" >
											<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Tên khách hàng</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" id="name" name="name"
															value="<?php echo $this->data['name']; ?>" readonly >
													</div>
											</div>
											<div class="form-group">
													<label for="url" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="url" name="url"
															value="<?php echo $this->data['email']; ?>" readonly >
													</div>
											</div>
                      <div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Ngày đặt hàng</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" readonly name="mota" id="mota"
															value="<?php echo date("d/m/Y H:i:s",strtotime($this->data['ngay_gio'])) ?>">
													</div>
											</div>
											<div class="form-group">
													<label for="mota" class="col-sm-2 control-label">Địa chỉ nhận hàng</label>
													<div class="col-sm-8">
															<input type="text" class="form-control1" placeholder="Địa chỉ nhận hàng" name="diachi" id="diachi"
															value="<?php echo $this->data['dia_chi'] ?>">
													</div>
											</div>
                      <div class="form-group">
													<label for="niemyet" class="col-sm-2 control-label">Số tiền</label>
													<div class="col-sm-8">
															<input  type="text" class="form-control1" id="sotien" name="sotien" readonly
															value="<?php echo $this->data['so_tien']; ?>" >
													</div>
											</div>
											<div class="form-group">
												<label for="tinhtrang" class="col-sm-2 control-label">Tình trạng</label>
												<div class="col-sm-8"><select name="tinhtrang" id="tinhtrang" class="form-control1">
													<option value="1" <?php if ($this->data['tinh_trang']==1) echo 'selected="selected"'; ?>>Đang xử lý</option>
                          <option value="2" <?php if ($this->data['tinh_trang']==2) echo 'selected="selected"'; ?>>Đang chuyển hàng</option>
                          <option value="3" <?php if ($this->data['tinh_trang']==3) echo 'selected="selected"'; ?>>Đã nhận</option>
                          <option value="0" <?php if ($this->data['tinh_trang']==0) echo 'selected="selected"'; ?>>Khách hủy</option>
												</select></div>
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
